<?php 
	require_once'app/views/admin/them/header.php';
	require_once'app/views/admin/them/sidebar.php';
 ?>
<style type="text/css">
	#them{
	margin-left: 20px;
}
</style>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active">danh mục / thêm danh mục</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Thêm danh mục</h1>
		</div>

	</div>
	<br/><!--/.row-->

	<div class="panel panel-container">
		<div class="row">
			<div class="col-xs-6 col-md-6 col-lg-6 ">

				<form action="<?php echo ADMIN_URL."check-cate" ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Tên Danh Mục</label>
						<div class="form-group has-success">
							<input class="form-control" type="text" name="cate_name">
						</div>

							<label>Mô tả</label>
						<div class="form-group has-success">
							<input class="form-control" type="text" name="mota">
						</div>
						<button type="submit" class="btn btn-warning">Thêm Danh Mục</button>
					</div>
				</form>

				

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