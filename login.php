<?php session_start();?>
<!DOCTYPE html>
<html lang="th">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>IL CT Test</title>


  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/small-business.css" rel="stylesheet">

</head>

<body>

  <?php include ("nav_before_login.php") ?>

  <!-- Page Content -->
  <div class="container">

	<!-- Heading Row -->
	<div class="row align-items-center my-5">
	  <div class="col-lg-8">
		<h1 class="font-weight-light">ระบบการทดสอบแนวคิดเชิงคำนวณ</h1>
		<form name="frmlogin"  method="post" action="check_login.php">
		<div class="card my-4">
		  <h5 class="card-header">เข้าสู่ระบบ</h5>
		  <div class="card-body">
			 <p> ชื่อผู้ใช้ :
		  <input class="form-control"  type="text"   id="Username" required name="Username" placeholder="Username">
		</p>
		<p>รหัสผ่าน :
		  <input class="form-control" type="password"   id="Password"required name="Password" placeholder="Password">
		</p>
		<p>
		  <button class="btn btn-primary" type="submit">Login</button>
		  &nbsp;&nbsp;
		  <button class="btn btn-primary" type="reset">Reset</button>
		  <a href="register.php">สมัครสมาชิก</a>
		  <br>
		</p>

		  </div>
		</div>


	  </form>


	  </div>
	  <!-- /.col-lg-8 -->

	</div>
	<!-- /.row -->


  </div>


  <!-- /.container -->


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
