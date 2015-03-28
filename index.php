<?php

require_once 'vendor/autoload.php';

Dotenv::load(__DIR__);
ORM::configure('sqlite:./app/storage/bb.sq3');

$router = new \Klein\Klein();

$router->respond(function($request, $response, $service) {
	$service->layout('app/templates/layouts/default.php');
	$service->title = 'Project Title';
});

$router->respond('/', function($request, $response, $service) {
	$profile = new \App\Models\Profile();
	$stats = $profile->getStats();
	$service->render('app/templates/views/profile.php', ['stats' => $stats]);
});

$router->respond('/calendar/[:year]', function($request, $response, $service) {
	$service->render('app/templates/views/calendar.php', [
		'year' => $request->year,
	]);
});

$router->respond('/calendar', function($request, $response, $service) {
	$response->redirect('/calendar/' . date('Y'));
});

$router->respond('/schedule/[:year]/[:month]/[:day]', function($request, $response, $service) {
	$game = new App\SportsData\Game(getenv('API_KEY'));
	$schedule = $game->schedule($request->year, $request->month, $request->day);

	echo json_encode($schedule);
	exit;
});

$router->respond('/summary/[:game]', function($request, $response, $service) {
	$game = new App\SportsData\Game(getenv('API_KEY'));
	$summary = $game->summary($request->game);

	$record = Model::factory('App\Models\Game')->create();

	$record->id = $request->game;
	foreach ($summary as $key => $value) {
		$record->{$key} = $value;
	}

	try {
		$record->save();
	} catch (Exception $e) {
		// Shut up
	}
});

$router->onHttpError(function($code, $klein) {
	$klein->response()->redirect('/');
});

$router->dispatch();
