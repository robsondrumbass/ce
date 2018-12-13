<?php 
namespace CodeCommerce\Http\Controllers;
/**
 * classe de inicio
 */
use CodeCommerce\Category;

class InicioController extends Controller
{
	/*
	private $categories;

	public function __construct(Category $category){
		$this->categories = $category;
	}
	*/
	public function index(){
		$nome="Robson";
		$sobrenome="Santos";
		//$categories = $this->categories;
		//return view('inicio')->with('nome',$nome);
		//return view('inicio')->with('categories');
		return view('inicio',compact('nome','sobrenome'));
		//return view('inicio',['nome'=>$nome,'sobrenome'=>$sobrenome]);
	}
}