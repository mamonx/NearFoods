<?php

namespace App\Http\Controllers;

use App\Components\Services\HotPepperService;
use Illuminate\Http\Request;

class ShopController extends  Controller
{

    /**
     * #GET /
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('index');
    }

    /**
     * #GET /shop/:id
     * @param Request $request
     * @param $id
     * @return \Illuminate\View\View
     */
    public function getShow(Request $request, $id)
    {
        $service = new HotPepperService();
        $res = $service->show($id, 'array');
        $shop = isset($res['Shop']) ? $res['Shop'] : null;
        return view('show', compact('shop'));
    }

    /**
     * #POST /shops
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function postList(Request $request)
    {
        $conditions = $request->all();
        $service = new HotPepperService();
        $shops = $service->lists($conditions, 'array');
        return view('list', compact('shops'));
    }

}