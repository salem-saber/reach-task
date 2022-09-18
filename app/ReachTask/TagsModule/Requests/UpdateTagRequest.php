<?php

namespace App\ReachTask\TagsModule\Requests;

use App\ReachTask\Base\Traits\ValidationResponseTrait;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTagRequest extends FormRequest
{

    use ValidationResponseTrait;

    public function rules()
    {
        return [
            'title' => 'required|string',
        ];
    }
}

