<?php 

namespace App\Modules\Front\Controllers;

use App\Libraries\ValidationRules;
use \SendGrid\Mail\Mail;
use \SendGrid;

class Connect extends BaseController
{
	// public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger) {
	// 	parent::initController($request, $response, $logger);
	// }
	
	public function index() {
		$this->tag->setFrontSelectedMenu('connect');
		$this->tag->setTitle('Meridian | Connect with us');
		$this->view('connect.phtml', []);
	}

	public function sendConnectEmail() {
		$returnRes["success"] = false;
    	$returnRes["message"] = "Your inquiry could not be sent, Please try again later.";
		if($this->request->isAJAX() && $this->request->getMethod() == 'post') {
			$validationRules = new ValidationRules();
			$userFormRules = $validationRules->getRules('connectFromFront');
			if($this->validate($userFormRules)) {

				$request = $this->request;

				ob_start();
				$this->layout->getEmailTemplate('connect_email_template.phtml');
				$template = ob_get_clean();

				$mailBody = str_replace('{site_url}', $this->url->getUri(), $template);
				$mailBody = str_replace('{site_logo}', $this->tag->getImageUri('assets/front/images/site-logo.png'), $mailBody);
				$mailBody = str_replace('{name}', $request->getPost('name'), $mailBody);
				$mailBody = str_replace('{email}', $request->getPost('email'), $mailBody);
				$mailBody = str_replace('{phone}', $request->getPost('phone'), $mailBody);
				$mailBody = str_replace('{subject}', $request->getPost('subject'), $mailBody);
				$mailBody = str_replace('{message}', $request->getPost('message'), $mailBody);
				

				$email = new Mail();
				$email->setFrom(getenv('SEND_FROM_EMAIL'), getenv('SEND_FROM_NAME'));
				$email->setSubject(getenv('SUBJECT'));
				$email->addTo(getenv('SEND_TO_EMAIL'));
				$email->addContent(
					"text/html", $mailBody
				);
				$sendgrid = new SendGrid(getenv('SENDGRID_API_KEY'));
				try {
					$response = $sendgrid->send($email);
					if($response->statusCode() == 202) {
						$returnRes["success"] = true;
						$returnRes["message"] = "Your inquiry has been sent successfully, we will get back to you shorty.";
						return json_encode($returnRes);
					}
				} catch (\Exception $e) {
					echo 'Caught exception: '. $e->getMessage() ."\n";
				}
			}
		}
		return json_encode($returnRes);
	}
}
