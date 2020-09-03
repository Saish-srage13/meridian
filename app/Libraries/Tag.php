<?php

namespace App\Libraries;

class Tag {

    protected $titleHtmlTemplate = '<title>{title}</title>';
    protected $imageHtmlTemplate = '<img src = "{src}" style = "{style}" alt = "{alt}"/>';
    protected $title = null;
    protected $pageTitle = null;
    protected $frontSelectedMenu = null;

    public function __construct()
    {
        $controller = service('router')->controllerName();
        $this->module = 'user';
        if(strpos($controller, '\Admin')) $this->module = 'admin';
    }

    public function setTitle($title = null) {
        $this->title = '';
        $title = $title ? $title : 'Meridian';
        $title = str_replace('{title}', $title, $this->titleHtmlTemplate);
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setPageTitle($pageTitle = null) {
        $this->pageTitle = $pageTitle ? $pageTitle : 'Meridian';
    }

    public function getPageTitle() {
        return $this->pageTitle;
    }

    public function getImage($image, $style = null, $alt = null) {
        $url = base_url($image);
        $imgHtml = $this->imageHtmlTemplate;
        if($image) {
            $imgHtml = str_replace('{src}',  $url ? $url : '', $imgHtml);
            $imgHtml = str_replace('{style}',  $style ? $style : '', $imgHtml);
            $imgHtml = str_replace('{alt}',  $alt ? $alt : '', $imgHtml);
            return $imgHtml;
        } else {
            return null;
        }
    }

    public function getImageUri($image) {
        if($image) {
            $imgUrl = base_url($image);
            return $imgUrl;
        }
        return null;
    }

    public function setFrontSelectedMenu($selectedMenu) {
        $this->frontSelectedMenu = $selectedMenu;
    }

    public function getFrontSelectedMenu() {
        return $this->frontSelectedMenu;
    }

}