<?php 

	require_once 'app/views/temp/header.php';
?>
<style type="text/css">
	#marin{
		margin-bottom: 200px;
	}

</style>
	
	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="public/images/categories.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="home_content">
				<div class="home_title">Shop</div>
				<div class="breadcrumbs">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="index.html">Home</a></li>
						<li><a href="#">Woman</a></li>
						<li>Accessories</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Products -->

	<div class="products">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="products_container grid">
							
							<!-- Product -->
							<?php foreach ($products as $pro): ?>
							<div class="product grid-item hot" id="marin">
								<div class="product_inner">
									<div class="product_image">
										<img src="<?php echo $pro->image ?>" alt="">
										<div class="product_tag">hot</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product.html"><?php echo $pro->name ?></a></div>
										<div class="product_price"><?php echo $pro->price ?></div>
										<div class="product_button ml-auto mr-auto trans_200">
											<a href="<?php echo BASE_URL .'gio-hang?id=' . $pro->id ;?>">Thêm vào giỏ</a></div>
									</div>
								</div>	
							</div>
							<?php endforeach ?>

							

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php
	require_once 'app/views/temp/footer.php';


?>