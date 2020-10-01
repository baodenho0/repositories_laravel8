<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;

class ProductController extends Controller
{
    protected $productRepo;
    protected $userRepo;

    public function __construct(
    	ProductRepositoryInterface $productRepo,
    	UserRepositoryInterface $userRepo
    ){
    	$this->productRepo = $productRepo;
    	$this->userRepo = $userRepo;
    }

    public function index(){
    	$products = $this->productRepo->all();

    	echo $products;
    }

    public function getUser(){ //dd('dd');
    	echo $this->userRepo->first();

        dd($this->userRepo->getData());
    }
}
