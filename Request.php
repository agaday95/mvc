<?php

namespace MVC;

class Request
{
    public $url;

    // Get current uri in browser
    public function __construct()
    {
        $this->url = $_SERVER["REQUEST_URI"];
    }
}
