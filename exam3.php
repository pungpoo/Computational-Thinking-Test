<?php session_start();?>
<?php

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

  <script src="../../blockly_compressed.js"></script>
  <script src="../../blocks_compressed.js"></script>

  <script src="../../Javascript_compressed.js"></script>
  <script src="../../Python_compressed.js"></script>
  <script src="direction.js"></script>

  <script src="../../msg/js/en.js"></script>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/small-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
	<?php include ("nav_after_login.php") ?>

  <!-- Page Content -->
  <div class="container">

	<!-- Heading Row -->
	<div class="row align-items-center my-5">
	  <div class="col-lg-6">
		<!--h1 class="font-weight-light">CT Test</h1-->
		<p>จงใช้รูปต่อไปนี้ตอบคำถามทุกข้อ โดยที่วศินและอรุณาจะเริ่มต้นเดินทางจากตำแหน่งที่กำหนดในรูปนี้เสมอ</p>

		<img class="img-fluid rounded mb-4 mb-lg-0" src="map.PNG" alt="">
		<p>*ห้ามเดินทางออกนอกตารางหรือผ่านช่อง ห้ามผ่าน </p>
		<p>**ถ้าโจทย์ไม่ได้ระบุว่าห้ามผ่านสถานที่หรือบุคคลอื่น สามารถผ่านสถานที่หรือบุคคลใดก็ได้ ยกเว้นช่องห้ามผ่าน</p>

	  </div>
	  <!-- /.col-lg-8 -->
	  <div class="col-lg-6">
		<p>3. อรุณาต้องการไปซื้อของที่ห้างสรรพสินค้าโดยไม่ผ่านสถานที่อื่น อรุณาจะต้องเดินทางอย่างไร ที่ใช้บล็อคคำสั่งน้อยที่สุด</p>
		<p>Repeat = ทำซ้ำคำสั่งนั้น .... รอบ </p>
		<button class="btn btn-primary"  onclick="showCode()">ส่งคำตอบ</button>
		<p></p>

	  <!-- /.col-md-4 -->
		<div id="blocklyDiv" style="height: 480px; width: 600px;"></div>

		<!--button class="btn btn-primary"  onclick="showPCode()">Show Python</button-->
	  <xml id="toolbox" style="display: none">

		<block type="direction_moveup"></block>
		<block type="direction_movedown"></block>
		<block type="direction_moveleft"></block>
		<block type="direction_moveright"></block>
		<block type="direction_repeat"></block>

	  </xml>
	</div>
	</div>
	<!-- /.row -->



  </div>
  <!-- /.container -->


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
	var demoWorkspace = Blockly.inject('blocklyDiv',
		{media: '../../media/',trashcan : true,
		 toolbox: document.getElementById('toolbox')});

	function showCode() {
	  // Generate JavaScript code and display it.
	  Blockly.JavaScript.INFINITE_LOOP_TRAP = null;
	  var code = Blockly.JavaScript.workspaceToCode(demoWorkspace);
	  var itemno = 3;
	  window.location.href = "submitanswer.php?item=" + code+ "&itemno=" + itemno;
	  //alert(code);
	}

	 function showPCode() {
	  // Generate Python code and display it.
	  Blockly.Python.INFINITE_LOOP_TRAP = null;
	  var code = Blockly.Python.workspaceToCode(demoWorkspace);
	  alert(code);
	}

  </script>
</body>

</html>
