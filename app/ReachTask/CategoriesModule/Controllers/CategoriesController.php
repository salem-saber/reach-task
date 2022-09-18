<?php

namespace App\ReachTask\CategoriesModule\Controllers;

use App\ReachTask\Base\BaseController;
use App\ReachTask\CategoriesModule\Requests\CreateCategoryRequest;
use App\ReachTask\CategoriesModule\Requests\UpdateCategoryRequest;
use App\ReachTask\CategoriesModule\Services\CategoriesService;

class CategoriesController extends BaseController
{
    public function __construct()
    {
        $this->setService(new CategoriesService());
    }

    public function getAll()
    {
        return $this->getResponse($this->getService()->getAll());
    }

    public function getOne($id)
    {
        return $this->getResponse($this->getService()->getOne($id));

    }

    public function create(CreateCategoryRequest $request)
    {
        return $this->getResponse($this->getService()->create($request));

    }

    public function update($id , UpdateCategoryRequest $request)
    {
        return $this->getResponse($this->getService()->update($id , $request));

    }

    public function delete($id)
    {
        return $this->getResponse($this->getService()->delete($id));

    }
}
