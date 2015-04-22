<?php

namespace App\Models;

use \Model;
use \Rhumsaa\Uuid\Uuid;

class User extends Model {
	public static $_table = 'users';

	public function authorize($password) {
		return $this->verifyPassword($password);
	}

	protected function generateID() {
		return Uuid::uuid4()->toString();
	}

	protected function hashPassword($password) {
		return password_hash($password, PASSWORD_DEFAULT);
	}

	public function register($username, $password) {
		$unique = $this->uniqueUser($username);
		if (!$unique) {
			throw new \Exception('Username is already in use.');
		}

		$this->id = $this->generateID();
		$this->username = $username;
		$this->password = $this->hashPassword($password);

		return $this->save();
	}

	protected function uniqueUser($username) {
		$count = $this->orm->where('username', $username)->count();

		return $count === 0;
	}

	protected function verifyPassword($password) {
		return password_verify($password, $this->password);
	}
}
