<?php

namespace App\Components\ActiveResources;

use App\Components\ActiveResources\Result\BaseResult;
use App\Components\Converter\ConvertXml;
use Purl\Url;

class HotPepper extends AbstractActiveResource
{
    /**
     * Set Initialize Properties.
     * @return void
     */
    protected function initialize()
    {
        $this->site = 'http://api.hotpepper.jp/GourmetSearch/V110/';
        $this->token = env('API_TOKEN');
    }

    /**
     * @return BaseResult
     */
    public function find()
    {
        $url = new Url(sprintf('%s?key=%s', $this->site, $this->token));

        if (!empty($this->conditions)) {
            $url->setData($this->conditions);
        }

        $this->clearConditions();

        $response = $this->client->request('GET', $url);

        return new BaseResult($response);
    }

    /**
     * @param string $format
     * @return mixed
     */
    public function result($format)
    {
        switch($format) {
            case 'json':
                return ConvertXml::toJson($this->contents);
            case 'xml':
                return $this->contents;
        }

        throw new \RuntimeException('invalid format type');
    }
}