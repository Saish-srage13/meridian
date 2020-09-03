<?php

namespace App\Libraries;

use CodeIgniter\Controller;

class CController extends Controller {

    protected $helpers = [];
    protected $moduleName = null;
    
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{

		parent::initController($request, $response, $logger);

        $this->setModule();
		$this->layout = new \App\Libraries\Layout();
		$this->tag = new \App\Libraries\Tag();
		$this->url = new \App\Libraries\Url();
		$this->breadcrumbs = new \App\Libraries\Breadcrumbs();
        $this->session = \Config\Services::session();
        $this->config = new \Config\Config();
        $this->libraries = new \Config\Libraries();
        $this->db = \Config\Database::connect();
    }

    public function setModule() {
        $router = service('router');
        $controller = $router->controllerName();
        $module = 'user';
        if(strpos($controller, '\Admin')) $module = 'admin';
        $this->moduleName = $module;
    }
    
    public function view($view, $data = null) {

        $router = service('router');
        $controller = $router->controllerName();
        $module = 'user';
        if(strpos($controller, '\Admin')) $module = 'admin'; 
        else $module = 'front';
        $templatePath = 'template/'.$module .'/'.$this->layout->getTemplate();
        $data['view'] = $module.'/'.$view;
        // var_dump($templatePath);
        // die();
        foreach($this->libraries->libraryList as $lib) {
            if(property_exists($this, $lib))
                $data[$lib] = $this->$lib;
        }
        echo view($templatePath, $data);
    }
}