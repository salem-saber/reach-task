<?php

namespace App\ReachTask\AdvertisersModule\Models;

use App\ReachTask\AdsModule\Models\Ad;
use Illuminate\Database\Eloquent\Model;

class Advertiser extends Model
{
    protected $fillable = [
        'name',
        'email',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];


    public function ads()
    {
        return $this->hasMany(Ad::class, 'advertiser_id');
    }
}
