<?php 

namespace App\Modules\Front\Controllers;

class AboutUS extends BaseController {

	public function index() {
		$this->tag->setFrontSelectedMenu('about-us');
		$this->tag->setTitle('Meridian | About Us');
		$this->view('about-us.phtml', []);
	}
}
