<?php
namespace App\Controllers; 
use App\Models\Category;
use App\Models\Product;
class HomeController
{
	
	public function index(){
		
		if (isset($_SESSION['auth'])) {
			include_once './app/views/admin/home/homepage.php';
		}
		else{
			include_once './app/views/admin/quantri/dangnhap.php';
		}
		
	}

	public function home(){
		$menus = Category::where(['show_menu', '=', 1])->get();
		$products = Product::sttOrderBy('id', true)->limit(15)->get();

		include_once './app/views/homepage/home.php';
	}


	public function detail(){
	
	}
}


 ?>