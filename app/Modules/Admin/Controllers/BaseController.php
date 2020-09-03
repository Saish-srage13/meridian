<?php

namespace App\Modules\Admin\Controllers;

use App\Libraries\CController;

class BaseController extends CController
{
	protected $helpers = [];
	protected $selectedMenu = null;

	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger) {
		parent::initController($request, $response, $logger);
		
		// $this->layout->addCss('css/style.min.css');
		// $this->layout->addCss('css/bootstrap.min.css');
		// $this->layout->addCss('css/app.min.css');
		// $this->layout->addCss('css/icons.min.css');
		// $this->layout->addCss('css/admin-custom.css');
		// $this->layout->addCss('libs/toastr/build/toastr.min.css');

		// $this->layout->addJs('libs/jquery/jquery-3.5.1.min.js');
		// $this->layout->addJs('libs/toastr/build/toastr.min.js');
		// $this->layout->addJs('libs/bootstrap/js/bootstrap.bundle.min.js');
		// $this->layout->addJs('libs/metismenu/metisMenu.min.js');
		// $this->layout->addJs('libs/simplebar/simplebar.min.js');
		// $this->layout->addJs('libs/node-waves/waves.min.js');
		// $this->layout->addJs('js/app.js');

	}
}
