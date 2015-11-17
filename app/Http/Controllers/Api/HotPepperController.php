<?php

namespace App\Http\Controllers\Api;

use App\Components\Services\HotPepperService;

class HotPepperController extends AbstractApiController
{

    public function getIndex()
    {
        $service = new HotPepperService();
        return $service->index();
    }

    public function getShow($id)
    {
        $service = new HotPepperService();
        return $service->show($id);
    }

}