<?php 

namespace App\Repositories\Product;

use App\Repositories\BaseRepository;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
	public function getModel(){
		return \App\Models\Product::class;
	}

	public function getProduct(){
		return $this->model->select(
			'id',
			'title'
		)
		->get();
	}
}