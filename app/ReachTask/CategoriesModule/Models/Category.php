<?php

namespace App\ReachTask\CategoriesModule\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
      'title',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
