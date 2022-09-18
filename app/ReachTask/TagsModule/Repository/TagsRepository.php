<?php

namespace App\ReachTask\TagsModule\Repository;

use App\ReachTask\Base\Repository;
use App\ReachTask\TagsModule\Models\Tag;

class TagsRepository extends Repository
{

    public function __construct()
    {
        $this->setModel(new Tag());
    }
}
