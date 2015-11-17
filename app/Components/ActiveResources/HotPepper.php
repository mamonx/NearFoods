<?php

namespace App\Components\ActiveResources;

use App\Components\ActiveResources\Results\HotPepperResult;

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
        $this->providers['Result'] = HotPepperResult::class;
    }

    /**
     * join url to site and token .
     * @return string
     */
    protected function joinTokenUrl()
    {
        return sprintf('%s?key=%s', $this->site, $this->token);
    }

}