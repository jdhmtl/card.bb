<?php

namespace App\SportsData;

use \App\SportsData as Data;

class Game extends Data {

	public function boxscore($game_id) {
		$endpoint = "{$this->base}/games/{$game_id}/boxscore.json";

		$response = $this->Guzzle->get($endpoint, [
			'query' => ['api_key' => $this->key]
		]);

		$status = $response->getStatusCode();

		var_dump($response->json()); exit;
	}

	public function playByPlay($game_id) {
		$endpoint = "{$this->base}/games/{$game_id}/pbp.json";

		$response = $this->Guzzle->get($endpoint, [
			'query' => ['api_key' => $this->key]
		]);

		$status = $response->getStatusCode();

		$plays = $response->json();
		header('Content-Type: application/json');
		echo json_encode($plays); exit;
	}

	public function schedule($year, $month, $day) {
		$endpoint = "{$this->base}/games/{$year}/{$month}/{$day}/schedule.json";

		$response = $this->Guzzle->get($endpoint, [
			'query' => ['api_key' => $this->key]
		]);

		$status = $response->getStatusCode();
		$games = [];

		if ($status == 200) {
			$data = $response->json();
			foreach ($data['league']['games'] as $game) {
				$games[$game['id']] = "{$game['away']['abbr']} at {$game['home']['abbr']}";
			}
		}

		return $games;
	}

	public function summary($game_id) {
		$endpoint = "{$this->base}/games/{$game_id}/summary.json";

		$response = $this->Guzzle->get($endpoint, [
			'query' => ['api_key' => $this->key]
		]);

		$status = $response->getStatusCode();

		$data = $response->json();
		$parsed = $this->parseGameStats($data);

		return $parsed;
	}

	public function parseGameStats($data) {
		$home = $data['game']['home']['statistics'];
		$away = $data['game']['away']['statistics'];

		$stats = [
			'hsbt'        => intval(max($data['game']['home']['runs'], $data['game']['away']['runs'])),
			'singles'     => intval($home['hitting']['onbase']['s'] + $away['hitting']['onbase']['s']),
			'doubles'     => intval($home['hitting']['onbase']['d'] + $away['hitting']['onbase']['d']),
			'triples'     => intval($home['hitting']['onbase']['t'] + $away['hitting']['onbase']['t']),
			'homeruns'    => intval($home['hitting']['onbase']['hr'] + $away['hitting']['onbase']['hr']),
			'stolenbases' => intval($home['hitting']['steal']['stolen'] + $away['hitting']['steal']['stolen']),
			'strikeouts'  => intval($home['pitching']['outs']['ktotal'] + $away['pitching']['outs']['ktotal']),
			'doubleplays' => intval($home['fielding']['dp'] + $away['fielding']['dp']),
			'tripleplays' => intval($home['fielding']['tp'] + $away['fielding']['tp']),
		];

		return $stats;
	}
}
