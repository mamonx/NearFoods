<?php

namespace App\Components\ActiveResources\Results;

use App\Components\Converter\ConvertXml;

class HotPepperResult extends AbstractResult
{

    /**
     * @param string $format
     * @return mixed
     * @throws \RuntimeException
     */
    public function result($format = 'json')
    {
        $format = mb_strtolower($format);

        switch($format) {
            case 'json':
                return ConvertXml::toJson($this->response->getBody());
            case 'xml':
                return $this->response->getBody();
            case 'array':
                $json = ConvertXml::toJson($this->response->getBody());
                return json_decode($json, true);
        }

        throw new \RuntimeException('invalid format type');
    }

}