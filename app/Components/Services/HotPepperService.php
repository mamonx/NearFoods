<?php
/**
 * Created by PhpStorm.
 * User: noguhiro
 * Date: 15/11/17
 * Time: 16:01
 */

namespace App\Components\Services;


use App\Components\ActiveResources\HotPepper;

class HotPepperService
{

    public function index($format = 'json')
    {
      var_dump($this->lists());
        $activeResource = new HotPepper();
        return $activeResource
            ->conditions(['lat' => '35.529274', 'lng' => '139.375055'])
            ->get()
            ->result($format);
    }

    public function show($id, $format = 'json')
    {
        $activeResource = new HotPepper();
        return $activeResource
            ->conditions(['ShopId' => $id])
            ->get()
            ->result($format);
    }

    private function lists()
    {
      $activeResource = new HotPepper();
      $lists = $activeResource
        ->conditions(['lat' => '35.529274', 'lng' => '139.375055'])
        ->get()
        ->result('array');
      $ret = [];
      foreach ($lists['Shop'] as $shop) {
        $ret[$shop['ShopIdFront']] = $this->distance(
          ['lat' => '35.529274', 'lng' => '139.375055'],
          ['lat' => $shop['Latitude'], 'lng' => $shop['Longitude']]
        );
      }
      return $ret;
    }

    private function distance($b, $t)
    {
      $r = 6378.137;
      $meter = 1000;
      $diffLat = deg2rad($b['lat'] - $t['lat']);
      $diffLng = deg2rad($b['lng'] - $t['lng']);
      return ceil(sqrt(
        pow($r * $diffLat, 2) + pow(cos(deg2rad($t['lat'])) * $r * $diffLng, 2)
      ) * $meter);
    }

}