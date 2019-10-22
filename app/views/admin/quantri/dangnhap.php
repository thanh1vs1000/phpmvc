<?php error_reporting(0); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>
<style type="text/css">
		#login{
			background: #D8D8D8;
			margin-top: 100px;
			width: 350px; height: 250px;
			border-radius: 15px;
		}
</style>
<body>
	<div class="container">
		<div class="row">
			<div class="col-3">
				
			</div>

			<div class="col-6" id="login">
				<center><span style="font-size: 20px; color: #00A8FF">ĐĂNG NHẬP HỆ THỐNG</span></center>
				<br/>
					<form role="form" method="post" action="<?php echo ADMIN_URL . 'check-login' ?>">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="password" type="password" value="">
								</div>
								<div class="checkbox">
									<label>
										<input name="remember" type="checkbox" value="Remember Me">Remember Me
									</label>
								</div>
								<Center><input type="submit" name="submit" value="ĐĂNG NHẬP" class="btn btn-info"></Center>
						</form>
			</div>
			<div class="col-3">
				
			</div>

			
		</div>
		
	</div>
</body>
</html>