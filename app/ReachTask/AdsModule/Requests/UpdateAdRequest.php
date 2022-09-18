<?php

namespace App\ReachTask\AdsModule\Requests;

use App\ReachTask\Base\Traits\ValidationResponseTrait;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAdRequest extends FormRequest
{

    use ValidationResponseTrait;
    public function rules()
    {
        return [
            'title' => 'required|string',
            'description' => 'required|string',
            'type' => 'required|in:FREE,PAID',
            'start_date' => 'required|date_format:Y-m-d',
            'category_id' => 'required|exists:categories,id',
            'advertiser_id' => 'required|exists:advertisers,id',
            'tags' => 'required|array',
            'tags.*' => 'required|exists:tags,id'
        ];
    }
}
