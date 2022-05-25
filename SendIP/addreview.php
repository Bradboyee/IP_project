<?php
include("connect_mysql.php");
session_start();
$review =  $_POST['review'];
$score = $_POST['score'];
echo $_SESSION['Trip_ID'];
echo "<br>";
echo $review;
echo $score;


$sql = "INSERT INTO review (Review_Score,Review_Feedback) VALUES ('$score','$review')";
if($conn->query($sql) === TRUE){
  $last_id = $conn->insert_id;

  $update = "UPDATE trip SET Review_ID = '$last_id' WHERE Trip_ID = '".$_SESSION["Trip_ID"]."' ";
  if ($conn->query($update) === TRUE){
    echo "<script>location.href='selectdriver.php';alert('Review Added');</script>";
  }
      
  } else{
      echo "ERROR: Hush! Sorry $sql. " 
          . mysqli_error($conn);
  }
?>