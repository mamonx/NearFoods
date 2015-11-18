<?php

namespace App\Components\ActiveResources\Results;

class ErrorResult implements InterfaceResult
{

    private $result = [
        'code'    => 400,
        'status'  => 'error',
        'message' => null
    ];

    /**
     * @param $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->result['code'] = $code;
        return $this;
    }

    /**
     * @param $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->result['message'] = $message;
        return $this;
    }

    /**
     * @param string $format
     * @return mixed
     * @throws \RuntimeException
     */
    public function result($format = 'json')
    {
        $format = mb_strtolower($format);
        switch ($format) {
            case 'json':
                return json_encode($this->result);
            case 'array':
                return $this->result;
        }
        return null;
    }
}