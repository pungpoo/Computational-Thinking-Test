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
	  <div class="col-lg-12">
		<h1 class="font-weight-light">ระบบการทดสอบแนวคิดเชิงคำนวณ</h1>
		<h1 class="font-weight-light">Computational Thinking Test</h1>
		<p>หากมี ชื่อผู้ใช้งาน และ รหัสผ่าน แล้ว สามารถไปที่หน้า<a href="login.php">เข้าสู่ระบบ</a>เพื่อเข้าสู่แบบทดสอบได้เลย</p>
		<p>หากยังไม่มี รหัสผู้ใช้งาน และ รหัสผ่าน แล้ว สามารถไปที่หน้า<a href="register.php">สมัครสมาชิก</a></p>



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
