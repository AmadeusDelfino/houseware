<?php

namespace App\Support\Service;

use App\Exceptions\InvalidParamsException;
use App\Support\Inferfaces\Response;
use App\Support\Inferfaces\Rules;
use App\Support\Log\Log;
use App\Support\Model\ModelBase;
use App\Support\Response\All;
use App\Support\Response\Created;
use App\Support\Response\Find;
use App\Support\Response\Updated;
use App\Support\Validator\Responses\ValidateFail;

abstract class ServiceBase
{
    use Log;

    /**
     * @var ModelBase
     */
    protected $model;
    protected $createRules;
    protected $updateRules;

    public function __construct()
    {
        if(class_exists($this->model)) {
            $this->model = new $this->model;
        }
    }

    public function all($selects = '*', array $relations = []) : Response
    {
        return new All((new $this->model)->select($selects)
            ->with($relations)
            ->get());
    }

    public function find($id, $selects = '*', $relations = []) : Response
    {
        return new Find((new $this->model)->select($selects)
            ->with($relations)
            ->findOrFail($id));
    }

    public function create($data) : Response
    {
        if(!is_null($this->createRules)) {
            $this->validate($data, new $this->createRules);
        }
        $created = (new $this->model)->create($data);
        $this->makeLog(\Auth::user()->id, LOG_ACTION_CREATE, $created);

        return new Created($created);
    }

    public function update($id, $data) : Response
    {
        if(!is_null($this->updateRules)) {
            $this->validate($data, new $this->updateRules);
        }

        $row = (new $this->model)->findOrFail($id);

        $oldData = $row->toArray();

        $row->fill($data);
        $row->save();

        $this->makeLog(\Auth::user()->id, LOG_ACTION_UPDATE, $row, [
            'old_data' => $oldData,
        ]);

        return new Updated($row);
    }

    public function delete($id) : void
    {
        $resource = (new $this->model)->findOrFail($id);
        $this->makeLog(\Auth::user()->id, LOG_ACTION_DELETE, $resource);

        $resource->delete();
    }

    /**
     * @param array $data
     * @param Rules $rulesClass
     * @throws InvalidParamsException
     */
    protected function validate(array $data, Rules $rulesClass) : void
    {
        $validator = \Validator::make($data, (new $rulesClass())->getRules());
        if($validator->fails()) {
            throw new InvalidParamsException((new ValidateFail($validator)));
        }
    }
}
