<?php 
session_start();
require_once './commons/utils.php';
require_once './commons/helpers.php';

require_once './vendor/autoload.php';


$url = isset($_GET['url']) ? $_GET['url'] : '/';

use App\Controllers\HomeController;
use App\Controllers\CartController;
use App\Controllers\CategoryController;
use App\Controllers\ProductController;
use App\Controllers\UserController;

switch ($url) {
	case '/':
		
		$ctr = new HomeController();
		$ctr->home();
		break;
	case 'dump-product':
		// sinh ra dump data cho bang product
		$ctr = new ProductController();
		$ctr->dumpData();
		break;
	case 'admin/dang-nhap':
		// sinh ra dump data cho bang product
		$ctr = new UserController();
		$ctr->dangnhap();
		break;
	case 'admin/dang-xuat':
		// sinh ra dump data cho bang product
		$ctr = new UserController();
		$ctr->logout();
		break;
	case 'admin/check-login':
		$ctr = new UserController();
		$ctr->checklogin();
		break;
	case 'admin/':
		$ctr = new HomeController();
		$ctr->index();
		break;
		// Thực hiện hiển thị: 
		// tổng số lượng danh mục
		// tổng số lượng sản phẩm
		// tổng số lượng hóa đơn
		// tổng số lượng user
		break;
	case 'admin/products':
		// hiển thị danh sách sản phẩm
		$ctr = new ProductController();
		$ctr->index();
		break;
	case 'admin/products/add':
		// màn hình thêm sản phẩm
		break;
	case 'admin/products/save-add':
		// lưu sản phẩm từ màn hình thêm sản phẩm
		// lưu thành công => admin/products
		// không thành công => admin/products/add
		break;
	case 'admin/products/edit':
		// màn hình sửa sản phẩm
		break;
	case 'admin/products/save-edit':
		// lưu sản phẩm từ màn hình thêm sản phẩm
		// lưu thành công => admin/products
		// không thành công => admin/products/edit
		break;
	case 'admin/products/remove':
		// màn hình sửa sản phẩm
		break;
	case 'admin/categories':
		// hiển thị danh sách danh mục
		break;
	case 'admin/categories/add':
		// màn hình thêm danh mục
		break;
	case 'admin/categories/save-add':
		// lưu danh mục từ màn hình thêm danh mục
		// lưu thành công => admin/categories
		// không thành công => admin/categories/add
		break;
	case 'admin/categories/edit':
		// màn hình sửa danh mục
		break;
	case 'admin/categories/save-edit':
		// lưu danh mục từ màn hình thêm danh mục
		// lưu thành công => admin/categories
		// không thành công => admin/categories/edit
		break;
	case 'admin/categories/remove':
		// màn hình sửa danh mục
		break;
	case 'lien-he':
		$ctr = new HomeController();
		$ctr->contact();
		break;

	case 'danh-muc':
		$ctr = new ProductController();
		$ctr->showpro();
		break;
	case 'admin/danh-muc':
		$ctr = new CategoryController();
		$ctr->index();
		break;
	case 'admin/add-cate':
		$ctr = new CategoryController();
		$ctr->themecate();
		break;
	case 'admin/check-cate':
		$ctr = new CategoryController();
		$ctr->checkcate();
		break;
	case 'admin/delete-cate':
		$ctr = new CategoryController();
		$ctr->deleteCate();
		break;
	case 'admin/edit-cate':
		$ctr = new CategoryController();
		$ctr->editCate();
		break;
	case 'admin/check-edit-cate':
		$ctr = new CategoryController();
		$ctr->checkeditCate();
		break;
	case 'admin/san-pham':
		$ctr = new ProductController();
		$ctr->index();
		break;


	case 'admin/chi-tiet-sp':
		$ctr = new HomeController();
		$ctr->detail();
		break;

	case 'admin/danh-sach-user':
		$ctr = new UserController();
		$ctr->index();
		break;
	case 'admin/add-user':
		$ctr = new UserController();
		$ctr->themeuser();
		break;
	case 'admin/check-user':
		$ctr = new UserController();
		$ctr->checkUser();
		break;
	case 'admin/delete-user':
		$ctr = new UserController();
		$ctr->deleteUser();
		break;
	case 'admin/edit-user':
		$ctr = new UserController();
		$ctr->editUser();
		break;

	case 'gio-hang':
		$ctr = new CartController();
		$ctr->add2Cart();
		break;

	case 'chi-tiet-gio-hang':
		$ctr = new CartController();
		$ctr->showCart();
		break;

	case 'xoa-item-gio-hang':
		$ctr = new CartController();
		$ctr->deleteItemInCart();
		break;

	case 'check-out':
		$ctr = new CartController();
		$ctr->checkout();
		break;
	case 'delete-all':
		$ctr = new CartController();
		$ctr->deleteAll();
		break;
	default:
		# code...
		break;
}


 ?>