<?php
  session_start();
  include("connection.php");

  require 'vendor/autoload.php';
  // Check if we have parameters w1 and w2 being passed to the script through the URL
  if (isset($_GET["item"]) && isset($_GET["itemno"])) {

    // Put the two words together with a space in the middle to form "hello world"
    $itemno =  $_GET["itemno"];
    $itemcode = $_GET["item"];

    print $itemcode;

    //print " <a href='exam.php'>กลับห้องสอบ</a><br />";
    $session_id = session_id();

    print session_id()."<br />";
    print $_SESSION["UserID"]."<br />";
    print $_SESSION["User"]."<br />";
    print $_SESSION["Useremail"]."<br />";
    print $_SESSION["Userschool"]."<br /><br />";


    $sql="INSERT INTO `testcart`(`TC_SESSIONID`, `TC_ITEMNO`, `TC_ITEMANSWER`) VALUES ('".$session_id."','".$itemno."','".$itemcode."')";

    print $sql."<br /><br />";
    $result = mysqli_query($con,$sql);

    if($result){
      print "Success add to testcart"."<br />";
    }
    else{
      print "Fail add to testcart"."<br />";
    }


    $itemgo = $itemno+1;

    if($itemno == 9)
    {
      // **** 1. add new test set ****//
      date_default_timezone_set('Asia/Bangkok');
      $date = date("Y-m-d H:i:s");
      $startdate = $_SESSION["starttime"];

      $sqlend = "INSERT INTO `testset`(`TS_USERID`, `TS_STARTTIME`, `TS_ENDTIME`) VALUES ('".$_SESSION["UserID"]."','".$startdate."','".$date."')";


      print $sqlend."<br /><br />";

      $result1 = mysqli_query($con,$sqlend);
      if($result1){

        print "Success Add a testset"."<br />";
        // **** 2. copy test item from testcart to testitem ****//

        $sql2="SELECT TS_ID FROM testset Where TS_USERID='".$_SESSION["UserID"]."' order by TS_ID desc limit 1; ";

        $result2 = mysqli_query($con,$sql2);

        if(mysqli_num_rows($result2)==1){

          $row = mysqli_fetch_array($result2);
          $testsetid = $row["TS_ID"];



          $sql3 = "SELECT * FROM testcart Where TC_SESSIONID='".$session_id."' order by TC_ITEMNO asc; ";
          $result3 = mysqli_query($con,$sql3);


          while($row3=mysqli_fetch_array($result3))
          {
            $itemnorow = $row3["TC_ITEMNO"];
            $itemansrow = $row3["TC_ITEMANSWER"];

            $sql4 = "INSERT INTO `testitem`(`TI_TSID`, `TI_ITEMNO`, `TI_ITEMANSWER`) VALUES ('".$testsetid."','".$itemnorow."','".$itemansrow."')";
            print $sql4."<br />";

            $result4 = mysqli_query($con,$sql4);
            if($result4){
              print "Success Add a testitem"."<br />";
            }
            else{
              print "Fail Add a testitem"."<br />";
            }
          }

           // **** 3. clear item in testcart ****//
          $sql5 = "DELETE FROM `testcart` WHERE `TC_SESSIONID`='".$session_id."'";
          print $sql5."<br />";

          $result5 = mysqli_query($con,$sql5);
          if($result5){
            print "Success delete a testitem"."<br />";
          }
          else{
            print "Fail delete a testitem"."<br />";
          }


        }
        else
        {

        }




      }
      else{
        print "Fail Add a testset"."<br />";
      }
      include "sendmail.php";
      $page = "end.php";
    }
    else
    {
      $page = "exam".$itemgo.".php";
    }
    //print " <a href=$page>ไปข้อต่อไป</a><br />";
    header( "Location: $page" );


    // Print out some JavaScript with $hello stuck in there which will put "hello world" into the javascript.
    //echo "<script language='text/javascript'>function sayHiFromPHP() { alert('Just wanted to say $hello!'); }</script>";
  }
?>