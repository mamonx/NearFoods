<?php

namespace App\Components\ActiveResources;

use GuzzleHttp\Client;

abstract class AbstractActiveResource
{
    /**
     * @var string
     */
    protected $site;
    /**
     * @var string
     */
    protected $token;
    /**
     * @var array
     */
    protected $conditions = [];
    /**
     * @var mixed
     */
    protected $contents;
    /**
     * @var Client
     */
    protected $client;

    /**
     * constructor.
     */
    public function __construct()
    {
        $this->initialize();
        $this->client = new Client();
    }

    /**
     * Set Initialize Properties.
     * @return void
     */
    abstract protected function initialize();

    /**
     * @return mixed
     */
    abstract public function find();

    /**
     * @param array $conditions
     * @return $this
     */
    public function conditions(array $conditions)
    {
        $this->conditions = $conditions;
        return $this;
    }

    /**
     * @return $this
     */
    public function clearConditions()
    {
        $this->conditions = [];
        return $this;
    }

}