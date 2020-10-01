<?php

namespace App\Repositories\User;

use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
	public function getModel(){
		return \App\Models\User::class;
	}

	public function getUser(){
		return $this->all();
	}

	public function getData(){
		return [
			'a','b','c'
		];
	}
}