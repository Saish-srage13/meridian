<?php 

namespace App\Modules\Front\Controllers;

class Connect extends BaseController
{
	public function index() {
		$this->tag->setFrontSelectedMenu('connect');
		$this->tag->setTitle('Meridian | Connect with us');
		$this->view('connect.phtml', []);
	}
}
