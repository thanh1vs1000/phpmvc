<?php 
namespace App\Controllers;
use App\Models\User;
use App\Models\Product;

class UserController
{
	
	public function index(){
		$users = User::all();
		include_once './app/views/admin/user/list-user.php';
	}
	public function themeuser(){
		include_once'./app/views/admin/user/add-user.php';

	}
	public function checkUser(){
		$email = $_POST['email'];
		$name = $_POST['name'];
		$password = $_POST['password'];
		$cfpassword = $_POST['cfpassword'];
		$avatar = $_FILES['avatar'];
		// validate
		// compare password & cfpassword
		// upload file
		$filePath = "";
		if($avatar['size'] > 0){
			$filename = $avatar['name'];
			$filename = uniqid() . "-" . $filename;
			move_uploaded_file($avatar['tmp_name'], "public/images/". $filename);
			$filePath = "public/images/" . $filename;
		}
		// mã hóa mật khẩu
		$hashPassword = password_hash($password, PASSWORD_DEFAULT);
		$data = compact('email', 'name');
		$data['password'] = $hashPassword;
		$data['avatar'] = $filePath;
		$model = new User();
		$model->insert($data);
		header('location:'.ADMIN_URL.'danh-sach-user');
	}
	public function editUser(){
		include_once './app/views/admin/user/edit-user.php';
	}
	public function dangnhap(){
		include_once './app/views/admin/quantri/dangnhap.php';
	}
	public function checklogin(){
		// error_reporting(0);
		error_reporting(E_ALL ^ E_NOTICE);

		$email = $_POST['email'];
		$password = $_POST['password'];

		$data = compact('email','password');

		$model = new User();
		$model = User::where(['email','=',$email])->first();

		$user = $model->email;
		$pass_word  = $model->password;

		if ($model != null && password_verify($password,$pass_word)) {
			$_SESSION['auth'] = [
					'name' => $model->name,
					'avatar'=> $model->avatar

			];
			header('location:'.ADMIN_URL);
		}
		else{
			echo'<script>';
			echo'alert("Email hoặc mật khẩu không chính xác")';
			echo'</script>';
			require_once'./app/views/admin/quantri/dangnhap.php';


		}
	}
	public function logout(){
		unset($_SESSION['auth']);
		header('location:'.ADMIN_URL.'dang-nhap');
	}

	public function deleteUser(){

	$id = isset($_GET['id']) == true ? $_GET['id'] : 0;
	User::destroy($id);
	header('location:'.ADMIN_URL.'danh-sach-user');

}
}