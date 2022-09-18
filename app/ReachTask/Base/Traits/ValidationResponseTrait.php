<?php

namespace App\ReachTask\Base\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

trait ValidationResponseTrait
{

    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $messages = $validator->errors()->messages();
        $errors = [];

        foreach ($messages as $key => $message)
            $errors[] = $message[0];

        $response = new JsonResponse(
            [
                'status_code' => Response::HTTP_BAD_REQUEST,
                'errors' => $errors,
                'data' => []
            ],Response::HTTP_BAD_REQUEST);

        throw new \Illuminate\Validation\ValidationException($validator, $response);
    }
}
