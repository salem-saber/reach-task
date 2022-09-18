<?php

namespace App\ReachTask\CategoriesModule\Repository;

use App\ReachTask\Base\Repository;
use App\ReachTask\CategoriesModule\Models\Category;

class CategoriesRepository extends Repository
{

    public function __construct()
    {
        $this->setModel(new Category());
    }
}
