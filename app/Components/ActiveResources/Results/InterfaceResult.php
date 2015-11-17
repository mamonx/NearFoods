<?php
/**
 * Created by PhpStorm.
 * User: noguhiro
 * Date: 15/11/17
 * Time: 15:32
 */

namespace App\Components\ActiveResources\Results;


interface InterfaceResult {
    /**
     * @param string $format
     * @return mixed
     * @throws \RuntimeException
     */
    public function result($format = 'json');
}