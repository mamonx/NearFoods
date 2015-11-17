<?php

namespace App\Components\ActiveResources\Result;

use GuzzleHttp\Psr7\Response;

class BaseResult
{
    /**
     * @var Response
     */
    protected $response;

    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    /**
     * @return mixed
     */
    public function result()
    {

    }
}