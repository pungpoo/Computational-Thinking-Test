<?php session_start();
    include("verify_login.php");
?>
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
  <style>
    .txt{
      font-weight: bold;
      color:firebrick;
    }
  </style>
</head>
<body>
  <?php include ("nav_after_login.php") ?>
  <!-- Page Content -->
  <div class="container">
    <!-- Heading Row -->
    <div class="row align-items-center my-5">
      <div class="col-lg-12">
        <h1 class="font-weight-light">ระบบการทดสอบแนวคิดเชิงคำนวณ</h1>
        <h2 class="font-weight-light">ท่านทำข้อสอบครบแล้ว</h2>
        <h4 class="txt">**กรุณาตรวจสอบ Email ของท่าน**</h4>
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