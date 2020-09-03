<?php

namespace App\Libraries;

class Url {

    protected $module;

    public function __construct()
    {
        $controller = service('router')->controllerName();
        $this->module = 'user';
        if(strpos($controller, '\Admin')) $this->module = 'admin';
    }

    public function getBackendUri($link = null) {
        $urlPath = $this->module."/" . $link;
        $url = $link ? base_url($urlPath) : base_url($this->module);
        return $url;
    }

    public function getUri($link = null) {
        $urlPath = "/" . $link;
        $url = $link ? base_url($urlPath) : base_url();
        return $url;
    }

    public function getPageTitle() {
        return $this->title;
    }
}