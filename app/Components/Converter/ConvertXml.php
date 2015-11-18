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

    /**
     * @param $xml
     * @return mixed|null
     */
    public static function toArray($xml)
    {
        $json  = self::toJson($xml);
        return $json ? json_decode($json, true)  : null;
    }

}