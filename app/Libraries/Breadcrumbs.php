<?php

namespace App\Libraries;

class Breadcrumbs {
    
    protected $breadcrumbTemplates = [
        'admin' => '<ol class="breadcrumb m-0">{breadcrumbs}</ol>'
    ];

    protected $breadcrumbItemTemplate = [
        'admin' => '<li class="breadcrumb-item {activeStatus}"><a href="{url}">{name}</a></li>'
    ];
    protected $breadcrumb = null;
    
    public function add($breadcrumbItemList = null) {
        if($breadcrumbItemList) {
            $controller = service('router')->controllerName();
            $module = 'user';
            if(strpos($controller, '\Admin')) $module = 'admin';
            $breadcrumbTemplate = $this->breadcrumbTemplates[$module];
            $breadcrumbItemTemplate = $this->breadcrumbItemTemplate[$module];
            $breadcrumbHtml = '';
            foreach($breadcrumbItemList as $breadcrumbItem => $breadcrumbItemUrl) {
                
                $breadcrumbHtml .= str_replace('{activeStatus}', !$breadcrumbItemUrl ? '': 'active', $breadcrumbItemTemplate);
                $breadcrumbHtml = str_replace('{url}', !$breadcrumbItemUrl ? 'javascript: void(0);': $breadcrumbItemUrl, $breadcrumbHtml);
                $breadcrumbHtml = str_replace('{name}', $breadcrumbItem, $breadcrumbHtml);
                
            }

            $this->breadcrumb = str_replace('{breadcrumbs}', $breadcrumbHtml, $breadcrumbTemplate);

        }
    }

    public function renderBreadcrumbs() {
        if($this->breadcrumb)
            return $this->breadcrumb;
    }
    
}