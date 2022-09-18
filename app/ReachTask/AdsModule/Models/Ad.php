<?php

namespace App\ReachTask\AdsModule\Models;

use App\ReachTask\AdvertisersModule\Models\Advertiser;
use App\ReachTask\CategoriesModule\Models\Category;
use App\ReachTask\TagsModule\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ad extends Model
{

    protected $fillable = [
        'title',
        'description',
        'type',
        'category_id',
        'advertiser_id',
        'start_date',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'ad_tag', 'ad_id', 'tag_id')->withTimestamps();
    }

    public function category()
    {
        return $this->belongsTo(Category::class , 'category_id');
    }

    public function advertiser()
    {
        return $this->belongsTo(Advertiser::class , 'category_id');
    }
}
