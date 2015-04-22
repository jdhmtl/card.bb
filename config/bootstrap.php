<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

Dotenv::load(dirname(__DIR__));

ORM::configure([
	'connection_string' => 'mysql:host=' . getenv('DBHOST') . ';dbname=' . getenv('DBNAME'),
	'username' => getenv('DBUSER'),
	'password' => getenv('DBPASS'),
]);

define('LAYOUTS_DIR',  dirname(__DIR__) . '/app/templates/layouts/');
define('VIEWS_DIR',    dirname(__DIR__) . '/app/templates/views/');
define('PARTIALS_DIR', dirname(__DIR__) . '/app/templates/partials/');

$router = new \Klein\Klein();

$router->respond(function() use ($router) {
	$router->service()->startSession();

	$router->app()->register('session', function() { return new App\Session; });
	$router->app()->register('guzzle', function() { return new GuzzleHttp\Client; });
	$router->app()->register('game', function() use ($router) {
		return new App\SportsData\Game($router->app()->guzzle(), getenv('API_KEY'));
	});

	$router->app()->register('userController', function() use ($router) {
		return new App\Controllers\UsersController($router);
	});

	$router->service()->layout(LAYOUTS_DIR . 'default.php');
	$router->service()->title = 'Fan Card';

	$router->service()->errors = $router->service()->flashes('error');
	$router->service()->messages = $router->service()->flashes('message');
});

require_once __DIR__ . '/routes.php';

$router->onHttpError(function($code, $klein) {
	$klein->response()->redirect('/');
});

return $router;
