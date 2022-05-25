<?php
    session_start();
    include("connect_mysql.php");
    if(!empty($_SESSION['Driver_ID'])){
        if($_SESSION['ATK_ID']==''){
            echo "<script>location.href='ATK.php';alert('Add your ATK first');</script>";
          }
          else if($_SESSION['Vaccine_ID']==''){
            echo "<script>location.href='vaccine.php';alert('Add your Vaccine first');</script>";
          }
          else if($_SESSION['Licence_ID']==''){
            echo "<script>location.href='licence.php';alert('Add your Licence first');</script>";
          }
        else {
            echo "<script>location.href='drivermap.php';alert('Working Page');</script>"; // ไปหน้าทำงานเลย
        }
    }
    else if(!empty($_SESSION['Customer_ID'])){
        if($_SESSION['Payment_ID']==''){
            echo "<script>location.href='payment.php';alert('Login Success Pls Add Payment');</script>";
          }
        else{
            echo "<script>location.href='selectdriver.php';alert('Select your driver Page');</script>"; // ไปหน้าเลือกคนขับเลย
        }
    }

?>