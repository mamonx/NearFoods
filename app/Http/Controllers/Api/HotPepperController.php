<?php

namespace App\Http\Controllers\Api;

use App\Components\Services\HotPepperService;
use Illuminate\Http\Request;

class HotPepperController extends AbstractApiController
{

    /**
     * @var array
     */
    protected $permit = ['id', 'lat', 'lng', 'start'];

    /**
     * @param Request $request
     * @return mixed
     */
    public function postList(Request $request)
    {
        $conditions = $this->permit($request);
        $service = new HotPepperService();
        return $service->lists($conditions);
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function postShow(Request $request, $id)
    {
        $service = new HotPepperService();
        return $service->show($id);
    }

}