<?php
include "connect_mysql.php";
session_start();
$startpoi =$_POST['startpoi'];
$despoi =$_POST['despoi'];
$kmdistance =$_POST['distance'];
$time =$_POST['interval'];
$pay =$_POST['pay'];
$date =$_POST['date'];
$period =$_POST['period'];
            /*echo "จาก : ".$startpoi;
            echo "<br>ไปยัง : ".$despoi;
            echo "<br>ระยะทาง : ".$kmdistance," km";
            echo "<br>ใช้เวลา : ".$time," นาที";
            echo "<br>ค่าบริการ : ".$pay," bath";
            echo "<br>ณ วันที่ : ".$date;
            echo "<br>เวลา : ".$period;*/



            $sql = "INSERT INTO trip (	Customer_ID,Driver_ID,Trip_Date,Trip_Source,Trip_Destination,Trip_Distance,Trip_Price,Trip_TimeTotal,Trip_Time) 
            VALUES ('".$_SESSION['Customer_ID']."','".$_SESSION['driverid']."','$date','$startpoi','$despoi','$kmdistance','$pay','$time','$period')";
            if(mysqli_query($conn, $sql)){
            $last_id = $conn->insert_id;
            $_SESSION['Trip_ID'] = $last_id;
            echo "<script>location.href='waitdrivermap.php';alert('added');</script>";

            
        }
?>