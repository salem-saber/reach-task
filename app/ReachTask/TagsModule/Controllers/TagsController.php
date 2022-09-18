<?php

namespace App\ReachTask\TagsModule\Controllers;

use App\ReachTask\Base\BaseController;
use App\ReachTask\TagsModule\Requests\CreateTagRequest;
use App\ReachTask\TagsModule\Requests\UpdateTagRequest;
use App\ReachTask\TagsModule\Services\TagsService;

class TagsController extends BaseController
{

    public function __construct()
    {
        $this->setService(new TagsService());
    }

    public function getAll()
    {
        return $this->getResponse($this->getService()->getAll());
    }

    public function getOne($id)
    {
        return $this->getResponse($this->getService()->getOne($id));

    }

    public function create(CreateTagRequest $request)
    {
        return $this->getResponse($this->getService()->create($request));

    }

    public function update($id, UpdateTagRequest $request)
    {
        return $this->getResponse($this->getService()->update($id, $request));

    }

    public function delete($id)
    {
        return $this->getResponse($this->getService()->delete($id));

    }
}
