<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

abstract class AbstractApiController extends Controller
{
    abstract public function getIndex();

    abstract public function getShow($id);
}