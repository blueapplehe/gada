<?php 
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class SiteController extends BaseController
{
	public function index(){
		return view("site/index");
	}

	public function about(){
		return view("site/about");
	}

	public function recruit(){
		return view("site/recruit");
	}

	public function msg(){
		return view("site/msg");
	}

	public function products(){
		return view("site/products");
	}
   
}
