<?php

namespace App\ReachTask\Base;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class BaseController extends Controller
{

    public Service $service;

    /**
     * @return Service
     */
    public function getService(): Service
    {
        return $this->service;
    }

    /**
     * @param Service $service
     */
    public function setService(Service $service): void
    {
        $this->service = $service;
    }


    public function getResponse($response)
    {
        if($this->getService()->hasErrors())
        {
            return response()->json(
                [
                    'status_code' => Response::HTTP_BAD_REQUEST,
                    'errors' => $this->getService()->getErrors(),
                    'data' => []
                ],Response::HTTP_BAD_REQUEST
            );
        }


        return response()->json(
            [
                'status_code' => Response::HTTP_OK,
                'errors' => [],
                'data' => $response
            ],Response::HTTP_OK
        );

    }

}
