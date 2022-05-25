<?php
session_start();

  include("connect_mysql.php");

//licence
$LicenceIssueDate=$_POST['LicenceIssueDate'];
$LicenceExpiryDate=$_POST['LicenceExpiryDate'];
$LicenceLicencePlate=$_POST['LicenceLicencePlate'];



$sql = "INSERT INTO licence (Licence_IssueDate, Licence_ExpiryDate, Licence_LicencePlate) VALUES ('$LicenceIssueDate', 
    '$LicenceExpiryDate','$LicenceLicencePlate')";
    
    if($conn->query($sql) === TRUE){
      $last_id = $conn->insert_id;
      $update = "UPDATE driver SET Licence_ID = '$last_id' WHERE Driver_ID = '".$_SESSION["Driver_ID"]."' ";
      if ($conn->query($update) === TRUE){
        $_SESSION['Licence_ID'] = $last_id;
        include("check.php");
      }
          
      } else{
      echo "ERROR: Hush! Sorry $sql. " 
          . mysqli_error($conn);
  }

    
  // Close connection
  mysqli_close($conn);
  ?>  