<?php

namespace App\ReachTask\AdvertisersModule\Requests;

use App\ReachTask\Base\Traits\ValidationResponseTrait;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAdvertiserRequest extends FormRequest
{

    use ValidationResponseTrait;

    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
        ];
    }
}

