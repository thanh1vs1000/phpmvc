<script src="public/jquery/jquery.min.js"></script>
	<script src="public/bootstrap/bootstrap.min.js"></script>
	<script src="public/bootstrap/chart.min.js"></script>
	<script src="public/bootstrap/chart-data.js"></script>
	<script src="public/bootstrap/easypiechart.js"></script>
	<script src="public/bootstrap/easypiechart-data.js"></script>
	<script src="public/bootstrap/bootstrap-datepicker.js"></script>
	<script src="public/bootstrap/custom.js"></script>
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