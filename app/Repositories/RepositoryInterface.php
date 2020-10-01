<?php 

namespace App\Repositories;

interface RepositoryInterface
{
	public function all();

	public function first();

	public function find($id);

	public function create($attributes = []);

	public function update($id, $attributes = []);

	public function delete($id);
}