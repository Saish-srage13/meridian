<?php

if(!isset($routes))
{ 
    $routes = \Config\Services::routes(true);
}

$routes->group('/', ['namespace' => 'App\Modules\Front\Controllers'], function($subroutes){

	
	/*** Route for Home ***/
	$subroutes->add('', 'Home::index');
	
	/*** Route for Connect ***/
	$subroutes->add('connect', 'Connect::index');
	
	$subroutes->add('connect/send-connect-mail', 'Connect::sendConnectEmail');

	/*** Route for Connect ***/
	$subroutes->add('services', 'Home::coming_soon');

	/*** Route for Connect ***/
	$subroutes->add('about-us', 'Home::coming_soon');

	/*** Route for Connect ***/
	$subroutes->add('grey-matter', 'Home::coming_soon');
	
	$subroutes->add('grey-matter', 'Home::coming_soon');

});