<?php 

namespace App\Modules\Front\Controllers;

class Error extends BaseController
{
	public function NotFound404() {
        $this->tag->setTitle('Meridian | Page not found');
		$this->view('not_found_404.phtml', []);
	}
}
