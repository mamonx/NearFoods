<?php

namespace App\Components\ActiveResources\Results;

use GuzzleHttp\Psr7\Response;

abstract class AbstractResult implements InterfaceResult
{
    /**
     * @var Response
     */
    protected $response;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        $this->response = $response;
    }

}