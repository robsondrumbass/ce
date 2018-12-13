<?php 
namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Product;

class AdminProductsController extends Controller
{
	private $produtos;

	public function __construct(Product $produtos){
		$this->produtos = $produtos;
	}

	public function index(){
		$produtos = $this->produtos->all();
		return view('products',compact('produtos'));
	}
}