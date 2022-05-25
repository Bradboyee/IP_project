<?php
session_start();
  include("connect_mysql.php");
    
  //VAC
  $VaccineProductFirst = $_POST['VaccineProductFirst'];
  $VaccineProductSec =$_POST['VaccineProductSec'];
  $VaccineProductThird = $_POST['VaccineProductThird'];
  $VaccineVaccinatedNumber = $_POST['VaccineVaccinatedNumber'];
  $VaccineDate = $_POST['VaccineDate'];
  echo $_SESSION['Driver_ID'];



//VAC
$sql = "INSERT INTO vaccine (Vaccine_Product_First, Vaccine_Product_Sec, Vaccine_Product_Third,Vaccine_VaccinatedNumber,Vaccine_Date	) VALUES ('$VaccineProductFirst', 
    '$VaccineProductSec','$VaccineProductThird','$VaccineVaccinatedNumber','$VaccineDate')";


    
if($conn->query($sql) === TRUE){
  $last_id = $conn->insert_id;
  $update = "UPDATE driver SET Vaccine_ID = '$last_id' WHERE Driver_ID = '".$_SESSION["Driver_ID"]."' ";
  if ($conn->query($update) === TRUE){
    $_SESSION['Vaccine_ID'] = $last_id;
    include("check.php");
  }
      
  } else{
      echo "ERROR: Hush! Sorry $sql. " 
          . mysqli_error($conn);
  }

    
  // Close connection
  mysqli_close($conn);
  ?>  