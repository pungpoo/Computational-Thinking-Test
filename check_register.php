<?php
  session_start();
  if(isset($_POST['Username'])){
	//connection
	include("connection.php");
	//รับค่า user & password
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	$FName = $_POST['FName'];
	$LName = $_POST['LName'];
	$School = $_POST['School'];

	//$Password = md5($_POST['Password']);

	//query
	//$sql="SELECT * FROM user Where USER_EMAIL='".$Username."' and USER_PASSWORD='".$Password."' ";

	$sql="INSERT INTO `user`(`USER_EMAIL`, `USER_PASSWORD`, `USER_FIRSTNAME`, `USER_LASTNAME`, `USER_SCHOOL`)
	VALUES ('".$Username."','".$Password."','".$FName."','".$LName."','".$School."')";
	$result = mysqli_query($con,$sql);

	if($result){

	  Header("Location: register_success.php");

	}else{

	  echo "<script>";
	  echo "alert(\"   ลงทะเบียนไม่สำเร็จ อาจมีการลงทะเบียนอีเมลนี้แล้ว ลองอีกครั้ง  \");";
	  echo "window.history.back()";
	  echo "</script>";

	}

  }else{

	Header("Location: login.php"); //user & password incorrect back to login again

  }
?>