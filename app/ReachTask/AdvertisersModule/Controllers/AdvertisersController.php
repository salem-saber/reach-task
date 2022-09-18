<?php

namespace App\ReachTask\AdvertisersModule\Controllers;

use App\ReachTask\Base\BaseController;
use App\ReachTask\AdvertisersModule\Requests\CreateAdvertiserRequest;
use App\ReachTask\AdvertisersModule\Requests\UpdateAdvertiserRequest;
use App\ReachTask\AdvertisersModule\Services\AdvertisersService;

class AdvertisersController extends BaseController
{

    public function __construct()
    {
        $this->setService(new AdvertisersService());
    }

    public function getAll()
    {
        return $this->getResponse($this->getService()->getAll());
    }

    public function getOne($id)
    {
        return $this->getResponse($this->getService()->getOne($id));

    }

    public function create(CreateAdvertiserRequest $request)
    {
        return $this->getResponse($this->getService()->create($request));

    }

    public function update($id, UpdateAdvertiserRequest $request)
    {
        return $this->getResponse($this->getService()->update($id, $request));

    }

    public function delete($id)
    {
        return $this->getResponse($this->getService()->delete($id));

    }

    public function advertiserAds($id)
    {
        return $this->getResponse($this->getService()->advertiserAds($id));

    }
}
