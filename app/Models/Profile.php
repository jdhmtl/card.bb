<?php

namespace App\Models;

use \Model;

class Profile {
	protected $model;

	public function __construct() {
		$this->model = Model::factory('App\Models\Game');
	}

	public function getStats() {
		$stats = [
			'hsbt'        => 0,
			'singles'     => 0,
			'doubles'     => 0,
			'triples'     => 0,
			'homeruns'    => 0,
			'stolenbases' => 0,
			'strikeouts'  => 0,
			'doubleplays' => 0,
			'tripleplays' => 0,
		];

		$games = $this->model->findMany();

		$stats['games'] = count($games);

		foreach ($games as $game) {
			if ($game->hsbt > $stats['hsbt']) {
				$stats['hsbt'] = $game->hsbt;
			}
			$stats['singles'] += $game->singles;
			$stats['doubles'] += $game->doubles;
			$stats['triples'] += $game->triples;
			$stats['homeruns'] += $game->homeruns;
			$stats['stolenbases'] += $game->stolenbases;
			$stats['strikeouts'] += $game->strikeouts;
			$stats['doubleplays'] += $game->doubleplays;
			$stats['tripleplays'] += $game->tripleplays;
		}

		return $stats;
	}
}
