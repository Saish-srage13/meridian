<?php 

namespace App\Modules\Front\Controllers;

class Services extends BaseController {

	public function index() {
		$this->tag->setFrontSelectedMenu('services');
		$this->tag->setTitle('Meridian | Services');
		$this->view('services.phtml', []);
	}
}
