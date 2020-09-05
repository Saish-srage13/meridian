<?php

namespace App\Libraries;

class Layout
{

    public $admin_templates = [
        'default' => 'admin_basic_template',
        'stripped' => 'admin_stripped_template'
    ];

    public $front_templates = [
        'default' => 'main_template.phtml'
    ];

    public $data = array();
    public $view = null;
    public $viewFolder = null;
    public $layoutsFolder = null;
    public $layout = null;
    public $cssAssets = [];
    public $jsAssets = [];
    public $pageContent = null;
    public $template = null;

    
    
    protected $cfg;

    public function __construct() {
        $this->cfg = config('Config');
        $this->setDefaultTemplate();
    }

    public function setDefaultTemplate() {
        $controller = service('router')->controllerName();
        $module = 'user';
        if(strpos($controller, '\Admin')) $module = 'admin';
        if(!$this->template) {
            switch($module) {
                case 'user':
                    $this->setTemplate($this->front_templates['default']);
                    break;
    
                case 'admin':
                    $this->setTemplate($this->admin_templates['default']);
                    break;
    
                default:
    
            }
        }
    }

    public function setTemplate($template) {
        $this->template = $template;
    }

    public function getTemplate() {
        return $this->template;
    }

    public function setLayoutFolderPath($layoutFolderPath = null) {
        $this->layoutsFolder = $layoutFolderPath ? $layoutFolderPath : $this->cfg->layoutDir;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function unsetLayout() {
        $this->layout = null;
    }

    public function renderPageContent() {
        return $this->pageContent;
    }

    public function setPageContent($viewName, $data) {

        $content = view($viewName, $data);
        $this->pageContent = $content;
    }

    public function addCss($file) {
        $cssHtmlTemplate = '<link rel="stylesheet" type="text/css" href="{fileName}">';
        $filePath = base_url() . DIRECTORY_SEPARATOR . $this->cfg->frontAssetsDir . DIRECTORY_SEPARATOR . $file;
        $css = str_replace('{fileName}', $filePath, $cssHtmlTemplate);
        array_push($this->cssAssets, $css);
    }

    public function renderCss() {
        if($this->cssAssets) {
            foreach($this->cssAssets as $css)
                echo $css;
        }
    }

    public function addJs($file , $defer = true) {
        $jsHtmlTemplate = '<script src="{fileName}" {defer} ></script>';
        $filePath = base_url() . DIRECTORY_SEPARATOR . $this->cfg->frontAssetsDir . DIRECTORY_SEPARATOR . $file;
        $jsWithPath = str_replace('{fileName}', $filePath, $jsHtmlTemplate);
        $js = str_replace('{defer}', $defer ? 'defer': '', $jsWithPath);
        array_push($this->jsAssets, $js);
    }

    public function renderJs() {
        if($this->jsAssets) {
            foreach($this->jsAssets as $js)
                echo $js;
        }
    }
    
    public function getEmailTemplate($templateName) {
        if($templateName) {
            $templatePath = $this->cfg->emailTemplateDir . DIRECTORY_SEPARATOR . $templateName;
            echo view($templatePath, []);
        }
        return null;
    }

}
