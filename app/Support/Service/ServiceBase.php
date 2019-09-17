<?php

namespace App\Support\Service;

use App\Exceptions\InvalidParamsException;
use App\Support\Inferfaces\Rules;
use App\Support\Model\ModelBase;
use App\Support\Validator\Responses\ValidateFail;
use Illuminate\Support\Collection;

abstract class ServiceBase
{
    /**
     * @var ModelBase
     */
    protected $model;
    protected $createRules = [];

    public function __construct()
    {
        if(class_exists($this->model)) {
            $this->model = new $this->model;
        }
    }

    public function all($selects = '*', array $relations = []) : Collection
    {
        return (new $this->model)->select($selects)
            ->with($relations)
            ->get();
    }

    public function find($id, $selects = '*', $relations = []) : ModelBase
    {
        return (new $this->model)->select($selects)
            ->with($relations)
            ->findOrFail($id);
    }

    public function create($data) : ModelBase
    {
        \Validator::make($data, $this->createRules)->validate();

        return (new $this->model)->create($data);
    }

    public function update($id, $data) : ModelBase
    {
        $row = (new $this->model)->findOrFail($id);
        $row->fill($data);
        $row->save();
        $row->refresh();

        return $row;
    }

    public function delete($id) : void
    {
        (new $this->model)->findOrFail($id)->delete();
    }

    protected function validate($data, Rules $rulesClass) : void
    {
        $validator = \Validator::make($data, (new $rulesClass())->getRules());
        if($validator->fails()) {
            throw new InvalidParamsException((new ValidateFail($validator)));
        }
    }
}
