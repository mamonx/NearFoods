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
     * @param $page
     * @return mixed
     */
    public function postPage(Request $request, $page)
    {
        $service = new HotPepperService();
        $conditions = $this->permit($request);
        return $service->page($page, $conditions);
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