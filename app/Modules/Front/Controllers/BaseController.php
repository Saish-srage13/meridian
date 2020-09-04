<?php

namespace App\Modules\Front\Controllers;

use App\Libraries\CController;

class BaseController extends CController
{
	protected $helpers = [];
	protected $selectedMenu = null;

	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger) {
		
		parent::initController($request, $response, $logger);
		
		$this->layout->addCss('css/bootstrap.min.css');
		$this->layout->addCss('css/font.css');
		$this->layout->addCss('css/fontawesome.min.css');
		$this->layout->addCss('css/toastr.min.css');
		$this->layout->addCss('css/custom.css');
		$this->layout->addCss('css/responsive.css');

		// $this->layout->addJs('js/jquery-3.5.1.min.js');
		$this->layout->addJs('js/popper.min.js');
		$this->layout->addJs('js/bootstrap.min.js');
		$this->layout->addJs('js/jquery.validate.min.js');
		$this->layout->addJs('js/toastr.min.js');
		$this->layout->addJs('js/custom.js');

		$this->selectedMenu = "asas";
	}

	public function setSelectedMenu($selectedMenu) {
		$this->selectedMenu = $selectedMenu;
	}
}
