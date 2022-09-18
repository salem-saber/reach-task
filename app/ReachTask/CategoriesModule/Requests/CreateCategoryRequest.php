<?php
namespace App\ReachTask\CategoriesModule\Requests;

use App\ReachTask\Base\Traits\ValidationResponseTrait;
use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
{
    use ValidationResponseTrait;

    public function rules()
    {
        return [
            'title' => 'required|string',
        ];
    }


}
