<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    /**
     * @var array
     */
    protected $permit = [];

    /**
     * @param Request $request
     * @return array
     */
    protected function permit(Request $request)
    {
        if (!empty($this->permit)) {
            return $request->all();
        }
        $ret = [];
        foreach ($this->permit as $key) {
            $ret[$key] = $request->input($key);
        }
        return $ret;
    }
}