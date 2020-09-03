<?php namespace App\Modules\Front\Controllers;

class Home extends BaseController {

	public function index() {
		$this->tag->setFrontSelectedMenu('home');
		$this->tag->setTitle('Meridian | Home');
		$this->view('home.phtml', []);
	}

	public function coming_soon() {
		$uriPath = $this->request->uri->getPath();
		$this->tag->setFrontSelectedMenu($uriPath);
		$this->tag->setTitle('Meridian');
		$this->view('coming_soon.phtml', []);
	}
}
