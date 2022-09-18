<?php

namespace App\ReachTask\Base;

use Illuminate\Database\Eloquent\Model;

class Repository
{

    public Model $model;

    public function create($data)
    {
        $created = $this->getModel()->create($data);
        if ($created)
            return $created;
        return false;
    }

    public function find($id)
    {
        $record = $this->getModel()->find($id);
        if (!$record)
            return false;
        return $record;
    }

    public function delete($id): bool
    {
        $record = $this->getModel()->find($id);
        if (!$record)
            return false;

        return $record->delete();
    }


    public function update($id, $data)
    {
        $update = $this->getModel()->find($id)->update($data);
        if (!$update)
            return false;
        return $this->getModel()->find($id);
    }


    public function get()
    {
        return $this->getModel()->get();
    }


    /**
     * @return Model
     */
    public function getModel(): Model
    {
        return $this->model;
    }

    /**
     * @param Model $model
     */
    public function setModel(Model $model): void
    {
        $this->model = $model;
    }
}
