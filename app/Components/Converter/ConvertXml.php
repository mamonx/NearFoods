<?php

namespace App\Components\Converter;

class ConvertXml
{
    /**
     * @param $xml
     * @return array|null
     */
    public static function toJson($xml)
    {
        if (!$obj = simplexml_load_string($xml)) {
            return null;
        }
        $json = json_encode($obj);
        return $json ?: null;
    }

}