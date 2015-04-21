<?php

$router->respond('/', function() use ($router) {
	$profile = new \App\Models\Profile();
	$stats = $profile->getStats();
	$router->service()->render(VIEWS_DIR . 'profile.php', ['stats' => $stats]);
});

$router->respond('/calendar/?[i:year]?', function() use ($router) {
	$year = isset($router->request()->year) ? $router->request()->year : date('Y');
	$router->service()->render(VIEWS_DIR . 'calendar.php', ['year' => $year]);
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
