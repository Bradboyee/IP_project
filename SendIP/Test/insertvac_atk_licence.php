<?php

  include("connect_mysql.php");
    
  //VAC
  $VaccineProductFirst = $_REQUEST['VaccineProductFirst'];
  $VaccineProductSec =$_REQUEST['VaccineProductSec'];
  $VaccineProductThird = $_REQUEST['VaccineProductThird'];
  $VaccineVaccinatedNumber = $_REQUEST['VaccineVaccinatedNumber'];
  $VaccineDate = $_REQUEST['VaccineDate'];
//ATK
$ATKDetectPlace=$_REQUEST['ATKDetectPlace'];
$ATKDetectDate=$_REQUEST['ATKDetectDate'];
$ATKInfectedHistory=$_REQUEST['ATKInfectedHistory'];
$ATKDetectResult=$_REQUEST['ATKDetectResult'];
//licence
$LicenceIssueDate=$_REQUEST['LicenceIssueDate'];
$LicenceExpiryDate=$_REQUEST['LicenceExpiryDate'];
$LicenceLicencePlate=$_REQUEST['LicenceLicencePlate'];


//VAC
$sql = "INSERT INTO vaccine (Vaccine_Product_First, Vaccine_Product_Sec, Vaccine_Product_Third,Vaccine_VaccinatedNumber,Vaccine_Date	) VALUES ('$VaccineProductFirst', 
    '$VaccineProductSec','$VaccineProductThird','$VaccineVaccinatedNumber','$VaccineDate')";

//ATK
$sql = "INSERT INTO atk (ATK_DetectPlace, ATK_DetectDate, ATK_InfectedHistory,ATK_DetectResult) VALUES ('$ATKDetectPlace', 
    '$ATKDetectDate','$ATKInfectedHistory','$ATKDetectResult')";

$sql = "INSERT INTO licence (Licence_IssueDate, Licence_ExpiryDate, Licence_LicencePlate) VALUES ('$LicenceIssueDate', 
    '$LicenceExpiryDate','$LicenceLicencePlate')";
    
  if(mysqli_query($conn, $sql)){
      echo "<script>location.href='Vaccine_Atk_License.php';alert('Add vaccine');</script>";
      
  } else{
      echo "ERROR: Hush! Sorry $sql. " 
          . mysqli_error($conn);
  }

    
  // Close connection
  mysqli_close($conn);
  ?>  