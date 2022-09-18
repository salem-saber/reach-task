<?php

namespace App\ReachTask\AdsModule\Controllers;

use App\ReachTask\AdsModule\Requests\CreateAdRequest;
use App\ReachTask\AdsModule\Requests\UpdateAdRequest;
use App\ReachTask\AdsModule\Services\AdsService;
use App\ReachTask\Base\BaseController;
use Illuminate\Http\Request;

class AdsController extends BaseController
{

    public function __construct()
    {
        $this->setService(new AdsService());
    }

    public function getAll(Request $request)
    {
        return $this->getResponse($this->getService()->getAll($request));
    }

    public function getOne($id)
    {
        return $this->getResponse($this->getService()->getOne($id));

    }

    public function create(CreateAdRequest $request)
    {
        return $this->getResponse($this->getService()->create($request));

    }

    public function update($id , UpdateAdRequest $request)
    {
        return $this->getResponse($this->getService()->update($id , $request));

    }

    public function delete($id)
    {
        return $this->getResponse($this->getService()->delete($id));

    }
}
