<?php

namespace App;

class Session {
	protected $data = [];

	public function __construct() {
		$this->data = &$_SESSION;
	}

	public function delete($key) {
		unset($this->data[$key]);
	}

	public function get($key) {
		return array_key_exists($key, $this->data) ? $this->data[$key] : null;
	}

	public function set($key, $value) {
		$this->data[$key] = $value;
	}
}
