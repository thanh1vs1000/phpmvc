<?php 
namespace App\Controllers;
use App\Models\Category;
use App\Models\Product;

class CategoryController
{
	
	public function index(){
		$categories = Category::all();
		include_once './app/views/admin/danh-muc/list-cate.php';
	}
	public function themecate(){
		include_once'./app/views/admin/danh-muc/add-cate.php';

	}
	public function checkcate(){
		$cate_name = isset($_POST['cate_name']) ? $_POST['cate_name']: "";
		$mota = isset($_POST['mota']) ? $_POST['mota']: "";

		$data = compact('cate_name','mota');

		$cate= new Category();
		$cate->insert($data);
		header('location:'.ADMIN_URL.'danh-muc');

	
	}
	public function checkeditCate($id){

		$cate_name = isset($_POST['cate_name']) ? $_POST['cate_name']: "";
		$mota = isset($_POST['mota']) ? $_POST['mota']: "";

		$data = compact('cate_name','mota');

		$cates = new Category();
		$cates->update($data);

		header('location:'.ADMIN_URL.'danh-muc');


	}
	public function editCate(){
		$id = isset($_GET['id']) == true ? $_GET['id'] : NULL;
		$model = Category::where('id','=',$id)->first();
		include_once'app/views/admin/danh-muc/edit-cate.php';
	}
	public function deleteCate(){

		$id = isset($_GET['id']) == true ? $_GET['id'] : 0;
			Category::destroy($id);
			header('location:'.ADMIN_URL.'danh-muc');

	}






	// public function demcate(){
	// 	$cates = Category::all();
	// 	return count($cates);
	// }	
}

 ?>