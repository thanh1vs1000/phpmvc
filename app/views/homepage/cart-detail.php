<?php 

require_once 'app/views/temp/header.php';
?>

<style type="text/css">
	#him{
		width: 80px;
		height: 40px;
		text-align: center;
		border-radius: 10px;
		border: 1px #00F7C0 solid;
	}
	#butn{
		width: 100%;
		height: 300px;

	}
	#cach{
		margin-left: 700px;
	}
	#cach a{
		padding: 10px;
		width: 150px;
	}
</style>
<script type="text/javascript">
	function  xoa(){
		var conf = confirm("Bạn có chắc muốn xóa không ?");
		return conf;
	}

</script>

<div class="home">
	<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="public/images/product_background.jpg" data-speed="0.8"></div>
	<div class="home_container">
		<div class="home_content">
			<div class="home_title">Cart</div>
			<div class="breadcrumbs">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="index.html">Home</a></li>
					<li>Your Cart</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<br/>
<br/>
<table class="table table-striped">
	<thead class="thead-dark">
		<tr class="bg-warning">
			<th scope="col">ID</th>
			<th scope="col">Tên sản phẩm</th>
			<th scope="col">Ảnh sản phẩm</th>
			<th scope="col">Giá</th>
			<th scope="col">Số Lượng</th>
			<th scope="col">Tổng Giá</th>

			<th scope="col" >Tùy Chọn</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			foreach ($cart as $pro):
			?>
			<tr>
				<td><?php echo $pro['id'] ?></td>
				<td><?php echo $pro['name'] ?></td>
				<td><img src="<?php echo $pro['image'] ?>" width="100"></td>
				<td><span style="color: #04BE9D">$<?php echo $pro['price'] ?></span></td>
				<td><input type="number" value="<?php echo $pro['quantity'] ?>" id="him"></td>
				<td><span style="color: #04BE9D">$<?php echo $pro['quantity']*$pro['price'] ?></span></td>

				<td id="tb1"><a onClick="return xoa();" href="<?php echo BASE_URL . 'xoa-item-gio-hang?id=' . $pro['id'] ?>" class="btn btn-danger">Xóa</a></td>

			</tr>
			<?php endforeach ?>
			<tr>
						
						<td colspan="5"><strong style="font-size: 20px;">TỔNG TIỀN</strong></td>
						<td>
							$<?php echo getCartTotalPrice(); ?>
						</td>
			</tr>

	</tbody>

</table>
	<div id="butn">
		<div id="cach">
		<a href="" class="btn btn-success">CẬP NHẬT</a>&nbsp;
		<a href="<?php echo BASE_URL.'delete-all?id=0' ?>" class="btn btn-danger">XÓA TẤT CẢ</a>&nbsp;
		<a href="" class="btn btn-warning">THANH TOÁN</a>&nbsp;
		</div>
	</div>
	

<?php
require_once 'app/views/temp/footer.php';
?>