<?php
include("connect_mysql.php");
session_start();
$problem = $_POST['problem'];
$date = date('m/d/Y');

$sql = "INSERT INTO problem (Problem_text,Problem_reportDate) VALUES ('$problem','$date')";
if($conn->query($sql) === TRUE){
  $last_id = $conn->insert_id;  

  $update = "UPDATE driver SET Problem_ID = '$last_id' WHERE Driver_ID = '".$_SESSION["Driver_ID"]."' ";
  if ($conn->query($update) === TRUE){
    echo "<script>location.href='drivermap.php';alert('problem Added');</script>";
  }
      
  } else{
      echo "ERROR: Hush! Sorry $sql. " 
          . mysqli_error($conn);
  }
?>