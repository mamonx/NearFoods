<?php

namespace App\Http\Controllers\Api;

use App\Components\ActiveResources\HotPepper;

class HotPepperController extends AbstractApiController
{

    public function getIndex()
    {
        $activeResource = new HotPepper();
        return $activeResource
            ->conditions(['SearchAddress' => '神奈川県'])
            ->find()
            ->result();
    }

    public function getShow($id)
    {
        $activeResource = new HotPepper();
        return $activeResource
            ->conditions(['ShopId' => $id])
            ->find()
            ->result('json');
    }

}