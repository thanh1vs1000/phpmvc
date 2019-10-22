<?php 
namespace App\Controllers;

/**
 * 
 */
use Faker;
use App\Models\Product;
class ProductController
{
	
	 public function index()
	{
		$products = Product::sttOrderBy('id', true)->limit(10)->get();
		include_once './app/views/admin/product/list-product.php';
	}
	// public function showpro{
	// 	$products = Product::all();
	// 	include_once './app/views/danh-muc/list.php';
	// }
	// public function dumpData(){
	// 	$faker = Faker\Factory::create();
	// 	// echo $faker->name;
	// 	// echo $faker->image($dir = 'public/images', $width = 640, $height = 480, 'people');
	// 	// echo $faker->realText($maxNbChars = 400, $indexSize = 3);
	// 	for ($i=0; $i < 100; $i++) { 
	// 		$model = new Product();
	// 		$data = [
	// 			'name' => $faker->company,
	// 			'image' => $faker->imageUrl($width = 640, $height = 480),
	// 			'cate_id' => rand(1, 7),
	// 			'price' => rand(100, 3000),
	// 			'short_desc' => $faker->realText($maxNbChars = 400, $indexSize = 3),
	// 			'detail' => $faker->realText($maxNbChars = 400, $indexSize = 3),
	// 			'star' => rand(1, 5),
	// 			'views' => rand(100, 3000)
	// 		];
	// 		$model->insert($data);
	// 	}
	// 	echo "done!";
	// }
}


 ?>