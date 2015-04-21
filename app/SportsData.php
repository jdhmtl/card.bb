<?php

namespace App;

use \GuzzleHttp\Client as Guzzle;

class SportsData {
	protected $Guzzle;
	protected $key;

	protected $base = 'http://api.sportsdatallc.org/mlb-t5';

	public function __construct(Guzzle $guzzle, $key) {
		$this->Guzzle = $guzzle;
		$this->key = $key;
	}
}
