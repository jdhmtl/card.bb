<?php

require_once 'vendor/autoload.php';

$router = new \Klein\Klein();

$router->respond(function($request, $response, $service) {
	$service->layout('app/templates/layouts/default.php');
	$service->title = 'Project Title';
});

$router->respond('/', function($request, $response, $service) {
	$service->render('app/templates/views/home.php');
});

$router->respond('/me', function($request, $response, $service) {
	$service->render('app/templates/views/profile.php');
});

$router->respond('/calendar/[:year]', function($request, $response, $service) {
	$service->render('app/templates/views/calendar.php', [
		'year' => $request->year,
	]);
});

$router->respond('/calendar', function($request, $response, $service) {
	$response->redirect('/calendar/' . date('Y'));
});

$router->dispatch();
