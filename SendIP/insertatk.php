<?php
  session_start();
  include("connect_mysql.php");
    

//ATK
$ATKDetectPlace=$_POST['ATKDetectPlace'];
$ATKDetectDate=$_POST['ATKDetectDate'];
$ATKInfectedHistory=$_POST['ATKInfectedHistory'];
$ATKDetectResult=$_POST['ATKDetectResult'];


//ATK
$sql = "INSERT INTO atk (ATK_DetectPlace, ATK_DetectDate, ATK_InfectedHistory,ATK_DetectResult) VALUES ('$ATKDetectPlace', 
    '$ATKDetectDate','$ATKInfectedHistory','$ATKDetectResult')";

    
if($conn->query($sql) === TRUE){
  $last_id = $conn->insert_id;
  $update = "UPDATE driver SET ATK_ID = '$last_id' WHERE Driver_ID = '".$_SESSION["Driver_ID"]."' ";
  if ($conn->query($update) === TRUE){
    $_SESSION['ATK_ID'] = $last_id;
    include("check.php");
  }
      
  } else{
      echo "ERROR: Hush! Sorry $sql. " 
          . mysqli_error($conn);
  }

    
  // Close connection
  mysqli_close($conn);
  ?>  