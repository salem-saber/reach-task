<?php

namespace App\ReachTask\TagsModule\Services;

use App\ReachTask\Base\Service;
use App\ReachTask\TagsModule\Repository\TagsRepository;
use Illuminate\Http\Request;

class TagsService extends Service
{

    public function __construct()
    {
       $this->setRepository(new TagsRepository());
    }


    public function getAll()
    {
      return  $this->getRepository()->get();
    }

    public function getOne($id)
    {
        $record = $this->getRepository()->find($id);
        if ($record)
            return $record;

        $this->setErrors('not found');
        return false;
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $record = $this->getRepository()->create($data);
        if ($record)
            return $record;

        $this->setErrors('error in create');
        return false;
    }


    public function update($id, Request $request)
    {
        $data = $request->all();
        $record = $this->getRepository()->update($id, $data);
        if ($record)
            return $record;

        $this->setErrors('error in update');
        return false;
    }

    public function delete($id)
    {
        if ($this->getRepository()->delete($id))
            return true;

        $this->setErrors('error in delete');
        return false;
    }

}
