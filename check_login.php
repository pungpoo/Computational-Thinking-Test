<?php
  session_start();
  if(isset($_POST['Username'])){
	//connection
	include("connection.php");
	//รับค่า user & password
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	//$Password = md5($_POST['Password']);

	//query
	$sql="SELECT * FROM user Where USER_EMAIL='".$Username."' and USER_PASSWORD='".$Password."' ";

	$result = mysqli_query($con,$sql);

	if(mysqli_num_rows($result)==1){

	  $row = mysqli_fetch_array($result);

	  $_SESSION["UserID"] = $row["USER_ID"];
	  $_SESSION["User"] = $row["USER_FIRSTNAME"]." ".$row["USER_LASTNAME"];
	  $_SESSION["Useremail"] = $row["USER_EMAIL"];
	  $_SESSION["Userschool"] = $row["USER_SCHOOL"];

	  Header("Location: user_page.php");

	}else{
	  echo "<script>";
	  echo "alert(\" user หรือ  password ไม่ถูกต้อง\");";
	  echo "window.history.back()";
	  echo "</script>";

	}

  }else{

	Header("Location: login.php"); //user & password incorrect back to login again

  }
?>