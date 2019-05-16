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
</head>
<body>
  <?php include ("nav_after_login.php") ?>
  <!-- Page Content -->
  <div class="container">
    <!-- Heading Row -->
    <div class="row align-items-center my-5">
      <div class="col-lg-12">
        <!-- <h1 class="font-weight-light">เข้าสู่ระบบสำเร็จ</h1> -->
        <h1 class="font-weight-light">ระบบการทดสอบแนวคิดเชิงคำนวณ</h1>
        <p>ข้อสอบมีทั้งหมด 9 ข้อ หากพร้อมแล้ว สามารถคลิกลิ้งด้านล่างเพื่อเริ่มทำข้อสอบ </p>
        <p>หมายเหตุเมื่อคลิกแล้ว ระบบจะเริ่มทำการจับเวลาเริ่มทำข้อสอบ ทันที เพราะฉะนั้นให้คลิกเมื่อพร้อม</p>
        <p><a class="btn btn-primary" href="exam1.php">เข้าสู่ห้องสอบ</a></p>

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