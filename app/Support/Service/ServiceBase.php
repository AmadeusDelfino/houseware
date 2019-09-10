<?php

namespace App\Support\Service;

use App\Support\Model\ModelBase;

abstract class ServiceBase
{
    /**
     * @var ModelBase
     */
    protected $model;
    protected $createRules = [];

    public function __construct()
    {
        $this->model = new ($this->model);
    }

    public function all($selects = '*', array $relations = [])
    {
        return (new $this->model)->select($selects)
            ->with($relations)
            ->get();
    }

    public function find($id, $selects = '*', $relations = [])
    {
        return (new $this->model)->select($selects)
            ->with($relations)
            ->findOrFail($id);
    }

    public function create($data)
    {
        \Validator::make($data, $this->createRules)->validate();

        return (new $this->model)->create($data);
    }

    public function update($id, $data)
    {
        $row = (new $this->model)->findOrFail($id);
        $row->fill($data);
        $row->save();
        $row->refresh();

        return $row;
    }

    public function delete($id)
    {
        (new $this->model)->findOrFail($id)->delete();
    }

}
