<?php

namespace App;

use \Klein\Klein;

class Controller {
	protected $request;
	protected $response;
	protected $service;
	protected $app;

	public function __construct(Klein $klein) {
		$this->request = $klein->request();
		$this->response = $klein->response();
		$this->service = $klein->service();
		$this->app = $klein->app();
	}
}