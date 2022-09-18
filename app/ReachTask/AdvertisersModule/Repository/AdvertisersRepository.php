<?php

namespace App\ReachTask\AdvertisersModule\Repository;

use App\ReachTask\Base\Repository;
use App\ReachTask\AdvertisersModule\Models\Advertiser;

class AdvertisersRepository extends Repository
{

    public function __construct()
    {
        $this->setModel(new Advertiser());
    }
}
