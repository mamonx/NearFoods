<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

abstract class AbstractApiController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    abstract public function postList(Request $request);

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    abstract public function postShow(Request $request, $id);
}