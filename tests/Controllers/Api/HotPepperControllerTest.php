<?php

namespace App\Tests\Controllers\Api;

class HotPepperControllerTest extends \TestCase
{
    private $validFixture = [
        'shopId' => 'J000000001',
        'location' => [
            'lat' => '35.529274',
            'lng' => '139.375055'
        ]
    ];

    public function testPage()
    {
        $this->_validFixturePage(1);
    }

    public function testNextPage()
    {
        $range = range(2, 5);
        foreach ($range as $page) {
            $this->_validFixturePage($page);
        }
    }

    public function testShow()
    {
        $req = $this->call('POST', '/api/shops/' . $this->validFixture['shopId']);
        $content = $req->getContent();
        $this->assertJson($content);
        $arr = json_decode($content, true);
        $this->assertTrue($arr['NumberOfResults'] > 0);
    }

    public function testShowFromZero()
    {
        $req = $this->call('POST', '/api/shops/NGNGNGNGNG');
        $content = $req->getContent();
        $this->assertJson($content);
        $arr = json_decode($content, true);
        $this->assertEquals((int)$arr['NumberOfResults'], 0);
    }

    /**
     * @param $page
     */
    private function _validFixturePage($page)
    {
        $req = $this->call('POST', '/api/page/' . $page, $this->validFixture['location']);
        $content = $req->getContent();
        $this->assertJson($content);
        $arr = json_decode($content, true);
        $this->assertArrayHasKey('DisplayFrom', $arr);
        $this->assertEquals((int)$arr['DisplayFrom'], $page);
    }

}