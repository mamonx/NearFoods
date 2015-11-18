<?php

namespace App\Tests\Services;


use App\Components\Services\HotPepperService;

class HotPepperServiceTest extends \TestCase
{

    public function testListToArray()
    {
        $s = new HotPepperService();
        $lists = $s->lists(['address' => '東京都'], 'array');
        $this->assertNotEmpty($lists);
        $this->assertTrue(is_array($lists));
    }

    public function testListToJson()
    {
        $s = new HotPepperService();
        $lists = $s->lists(['address' => '東京都']);
        $this->assertNotEmpty($lists);
        $this->assertJson($lists);
    }

    public function testListToError()
    {
        $s = new HotPepperService();
        $lists = $s->lists(['NothingKey' => '東京都'], 'array');
        $this->assertArrayHasKey('status', $lists);
        $this->assertEquals($lists['status'], 'error');
    }

    public function testPaging()
    {
        $s = new HotPepperService();
        $fixture = [
            'lat'   => 35.745404,
            'lng'   => 139.784049,
        ];

        $currentPage = 1;
        $lists = $s->page($currentPage, $fixture, 'array');

        $maxPage = intval($lists['NumberOfResults']);

        $this->assertNotEquals(0, $maxPage);

        $pages = range($currentPage + 1, $maxPage);
        $bool = false;

        foreach ($pages as $page) {
            $tmp = $s->page($page, $fixture, 'array');
            $this->assertArrayHasKey('DisplayFrom', $tmp);
            if ((int)$tmp['DisplayFrom'] === $maxPage) {
                $bool = true;
            }
        }

        $this->assertTrue($bool);
    }

    public function testShowToArray()
    {
        $s = new HotPepperService();
        $array = $s->show('J000000001', 'array');
        $this->assertNotEmpty($array);
        $this->assertTrue(is_array($array));
    }

    public function testShowToJson()
    {
        $s = new HotPepperService();
        $json = $s->show('J000000001');
        $this->assertNotEmpty($json);
        $this->assertJson($json);
    }

}