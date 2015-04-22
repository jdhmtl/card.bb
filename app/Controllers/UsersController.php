<?php

namespace App\Controllers;

use \App\Controller;
use \Exception;
use \Model;

class UsersController extends Controller {

	public function login() {
		$user = $this->app->session()->get('user');
		if ($user) {
			return $this->response->redirect('/');
		}

		return $this->service->render(VIEWS_DIR . 'login.php');
	}

	public function logout() {
		$this->app->session()->destroy();

		return $this->response->redirect('/');
	}

	public function register() {
		$this->service->render(VIEWS_DIR . 'register.php');
	}

	public function doLogin() {
		$post = $this->request->paramsPost();

		$user = Model::factory('App\Models\User')->where('username', $post->username)->findOne();
		if ($user && $user->authorize($post->password)) {
			$this->app->session()->set('user', $user->id);
			$this->response->redirect('/');
		} else {
			$this->service->flash('Invalid credentials', 'error');
			$this->service->back();
		}
	}

	public function doRegister() {
		try {
			$this->service->validateParam('username', 'Please enter a username')->notNull();
			$this->service->validateParam('password', 'Please enter a password')->notNull();

			$post = $this->request->paramsPost();
			$user = Model::factory('App\Models\User')->create();
			$registered = $user->register($post->username, $post->password);
			if ($registered) {
				$this->app->session()->set('user', $user->id);
				$this->service->flash('Your account has been created', 'message');
				$this->response->redirect('/');
			}
		} catch (Exception $e) {
			$this->service->flash($e->getMessage(), 'error');
			$this->service->back();
		}
	}
}
