<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

Dotenv::load(dirname(__DIR__));

ORM::configure([
	'connection_string' => 'mysql:host=' . getenv('DBHOST') . ';dbname=' . getenv('DBNAME'),
	'username' => getenv('DBUSER'),
	'password' => getenv('DBPASS'),
]);

define('LAYOUTS_DIR', dirname(__DIR__) . '/app/templates/layouts/');
define('VIEWS_DIR',   dirname(__DIR__) . '/app/templates/views/');

$router = new \Klein\Klein();

$router->respond(function($request, $response, $service) {
	$service->layout(LAYOUTS_DIR . 'default.php');
	$service->title = 'Fan Card';
});

require_once __DIR__ . '/routes.php';

$router->onHttpError(function($code, $klein) {
	$klein->response()->redirect('/');
});

return $router;
