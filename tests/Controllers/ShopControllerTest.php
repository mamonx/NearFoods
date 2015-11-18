<?php

namespace App\Tests\Controllers;

class ShopControllerTest extends \TestCase
{

    public function testHome()
    {
        $this->visit('/');
    }

    public function testHomeToList()
    {
        $this->visit('/')
            ->press('探す')
            ->seePageIs(url('/shops'));
    }

    public function testShow()
    {
        $this->visit('/shops/J000000001')
            ->see('ShopAddress');
    }

    public function testNgShow()
    {
        $this->visit('/shops/NGNGNGNG')
            ->see('該当する店舗は見つかりませんでした');
    }

    public function testList()
    {
        $location = [
            'lat' => '35.529274',
            'lng' => '139.375055'
        ];
        $this->makeRequest('POST', '/shops', $location)
            ->see('駐車場');
    }

    public function testNoList()
    {
        $this->makeRequest('POST', '/shops', [
            'lat' => 3,
            'lng' => 00222202123.9102102103
        ])->see('最寄りの店舗が見つかりませんでした');
    }

}