<?php

namespace App\Models;

use \Model;

class Game extends Model {
	public static $_table = 'games';

	public function getStats() {
		$games = $this->findMany();
		var_dump($games);
	}
}
