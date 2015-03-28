<?php

namespace App;

use \GuzzleHttp\Client as Guzzle;

class SportsData {
	protected $Guzzle;
	protected $key;

	protected $base = 'http://api.sportsdatallc.org/mlb-t5';

	public function __construct($key) {
		$this->Guzzle = new Guzzle();
		$this->key = $key;
	}
}
