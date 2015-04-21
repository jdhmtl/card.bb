<?php

$router->respond('/', function() use ($router) {
	$profile = new \App\Models\Profile();
	$stats = $profile->getStats();
	$router->service()->render(VIEWS_DIR . 'profile.php', ['stats' => $stats]);
});

$router->respond('/calendar/[:year]', function() use ($router) {
	$router->service()->render(VIEWS_DIR . 'calendar.php', [
		'year' => $router->request()->year,
	]);
});

$router->respond('/calendar', function() use ($router) {
	$router->response()->redirect('/calendar/2014');
});

$router->respond('/schedule/[:year]/[:month]/[:day]', function() use ($router) {
	$game = new App\SportsData\Game(getenv('API_KEY'));
	$schedule = $game->schedule($router->request()->year, $router->request()->month, $router->request()->day);

	echo json_encode($schedule);
	exit;
});

$router->respond('/summary/[:game]', function() use ($router) {
	$game = new App\SportsData\Game(getenv('API_KEY'));
	$summary = $game->summary($router->request()->game);

	$record = Model::factory('App\Models\Game')->create();

	$record->id = $router->request()->game;
	foreach ($summary as $key => $value) {
		$record->{$key} = $value;
	}

	try {
		$record->save();
	} catch (Exception $e) {
		// Shut up
	}
});
