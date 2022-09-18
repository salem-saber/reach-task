<?php

namespace App\ReachTask\AdsModule\Repository;

use App\ReachTask\AdsModule\Models\Ad;
use App\ReachTask\Base\Repository;

class AdsRepository extends Repository
{

    public function __construct()
    {
        $this->setModel(new Ad());
    }

}
