<?php 
	require_once'app/views/admin/them/header.php';
	require_once'app/views/admin/them/sidebar.php';
 ?>
<script type="text/javascript">
 		function  xoa(){
 			var conf = confirm("Bạn có chắc muốn xóa không ?");
 			return conf;
 		}

 </script>
			<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
				<div class="row">
					<ol class="breadcrumb">
						<li><a href="#">
							<em class="fa fa-home"></em>
						</a></li>
						<li class="active">Tài khoản</li>
					</ol>
				</div><!--/.row-->

				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Tài Khoản</h1>
					</div>
					<div class="col-lg-12">
						<a href="<?php echo ADMIN_URL.'add-user' ?>"><span class="btn btn-md btn-info"><i class="fa fa-plus-square" aria-hidden="true">&nbsp;&nbsp;</i>Thêm mới</span></a>
					</div>

				</div>
				<br/><!--/.row-->

				<div class="panel panel-container">
					<div class="row">
						<div class="col-xs-6 col-md-12 col-lg-12 ">
							<table class="table table-striped">
								<thead class="thead-dark">
									<tr class="bg-warning">
										<th scope="col">ID</th>
										<th scope="col">Tên</th>
										<th scope="col">Ảnh</th>
										<th scope="col">Email</th>
										
										
										<th scope="col" colspan="2">Tùy Chọn</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									foreach ($users as $us) :
								
									 ?>
									<tr>
										<td><?php echo $us->id ?></td>
										<td><?php echo $us->name ?></td>
										<td><img src="<?php echo $us->avatar ?>" width="50" height="50"></td>
										<td><?php echo $us->email ?></td>
										
										<td id="tb1"><a href="<?php echo ADMIN_URL .'edit-user?id='.$us->id ?>" class="btn btn-success">Sửa</a></td>
										<td id="tb1"><a onClick="return xoa();" href="<?php echo ADMIN_URL .'delete-user?id='.$us->id ?>" class="btn btn-danger">Xóa</a></td>

									</tr>
								<?php endforeach ?>
									
								</tbody>
							</table>


						</div>

					</div><!--/.row-->
				</div>











				<!-- phần footer -->
				<script src="public/jquery.min.js"></script>
				<script src="public/bootstrap/js/bootstrap.min.js"></script>
				<script src="public/bootstrap/js/chart.min.js"></script>
				<script src="public/bootstrap/js/chart-data.js"></script>
				<script src="public/bootstrap/js/easypiechart.js"></script>
				<script src="public/bootstrap/js/easypiechart-data.js"></script>
				<script src="public/bootstrap/js/bootstrap-datepicker.js"></script>
				<script src="public/bootstrap/js/custom.js"></script>
				<script>
					window.onload = function () {
						var chart1 = document.getElementById("line-chart").getContext("2d");
						window.myLine = new Chart(chart1).Line(lineChartData, {
							responsive: true,
							scaleLineColor: "rgba(0,0,0,.2)",
							scaleGridLineColor: "rgba(0,0,0,.05)",
							scaleFontColor: "#c5c7cc"
						});
					};
				</script>

			</body>
			</html>