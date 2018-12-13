<?php 
namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;

class AdminCategoriesController extends Controller
{
	private $categories;
	public function __construct(Category $category){
		$this->categories = $category;
	}
	public function index(){
		 $categorias = $this->categories->all();
		return view('categories',compact('categorias'));
	}
}