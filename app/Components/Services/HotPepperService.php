<?php


namespace App\Components\Services;

use App\Components\ActiveResources\HotPepper;

class HotPepperService
{

    public function lists(array $conditions, $format = 'json')
    {
        $activeResource = new HotPepper();
        return $activeResource
            ->conditions($conditions)
            ->get()
            ->result($format);
    }

    public function show($id, $format = 'json')
    {
        $activeResource = new HotPepper();
        return $activeResource
            ->conditions(['id' => $id])
            ->get()
            ->result($format);
    }

//    private function distances()
//    {
//        $activeResource = new HotPepper();
//        $lists = $activeResource
//            ->conditions(['lat' => '35.529274', 'lng' => '139.375055'])
//            ->get()
//            ->result('array');
//        $ret = [];
//        foreach ($lists['Shop'] as $shop) {
//            $ret[$shop['ShopIdFront']] = $this->distance(
//                ['lat' => '35.529274', 'lng' => '139.375055'],
//                ['lat' => $shop['Latitude'], 'lng' => $shop['Longitude']]
//            );
//        }
//
//        return $ret;
//    }
//
//    private function distance($b, $t)
//    {
//        $r = 6378.137;
//        $meter = 1000;
//        $diffLat = deg2rad($b['lat'] - $t['lat']);
//        $diffLng = deg2rad($b['lng'] - $t['lng']);
//        return ceil(sqrt(
//            pow($r * $diffLat, 2) + pow(cos(deg2rad($t['lat'])) * $r * $diffLng, 2)
//        ) * $meter);
//    }

}