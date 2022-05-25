<?php
session_start();
$startpoi = $_POST['startpoi'];
$despoi = $_POST['despoi'];
$distance = $_POST['distance'];
$interval = $_POST['interval'];
$_SESSION['startlat'] = $_POST['startlat'];
$_SESSION['startlon'] = $_POST['startlon'];
$_SESSION['deslat'] = $_POST['deslat'];
$_SESSION['deslon'] = $_POST['deslon'];

/*echo $startpoi." ".$despoi." ".$distance." ".$interval;
echo "<br>driver id =".$_SESSION['driverid'];
echo "<br>customer id =".$_SESSION['Customer_ID'];
echo $_SESSION['startlat'];*/
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Confirm Driver</title>
		<link rel="stylesheet" href="./css/style3.css">
	</head>
	<body>
		<ul class="nav">
			<a href="./selectdriver.php"><li>Back Select Driver</li></a>
		</ul>
		<div class="wrapper">
		  <div class="rec-prism">
			<div class="face face-front">
			  <div class="content">
				<h2>ยืนยัน</h2>
				<h1>คนขับชื่อ :  
					<?php
						 include('connect_mysql.php');
						 $sql = "SELECT * FROM driver WHERE driver_id = ".$_SESSION['driverid']."";
						 $result = $conn->query($sql);
						 while($row = $result->fetch_assoc()) {
							 echo $row["Driver_Name"];
							 echo "<br>".$row["Driver_Tel"];
							 echo "<br>".$row["Driver_Address"];
						}
						?>
						<br>
						<?php  //start
						$kmdistance = $distance*0.001;
						$time = round($interval/60,2);//sec to min
						$rateperkm = 35;//bath
						$pay = round($kmdistance*$rateperkm,0,PHP_ROUND_HALF_UP);
						$date = date('m/d/Y');
						$period = date('H:i:s');

						echo "จาก : ".$startpoi;
						echo "<br>ไปยัง : ".$despoi;
						echo "<br>ระยะทาง : ".$kmdistance," km";
						echo "<br>ใช้เวลา : ".$time," นาที";
						echo "<br>ค่าบริการ : ".$pay," bath";
						echo "<br>ณ วันที่ : ".$date;
						echo "<br>เวลา : ".$period;
					?><br><br>
				<center>
					<img src="qrpromtpay.jpg" alt="Promt pay"width="200px" height="200px">
				</center>
				</h1>
				<form action="addtrip.php" method="post">
					<input type="hidden"  name="startpoi"value=<?php echo  $startpoi; ?>>
					<input type="hidden" name="despoi" value=<?php echo  $despoi; ?>>
					<input type="hidden" name="distance" value=<?php echo  $kmdistance; ?>>
					<input type="hidden" name="interval" value=<?php echo  $time; ?>>
					<input type="hidden" name="pay" value=<?php echo  $pay; ?>>
					<input type="hidden" name="date" value=<?php echo  $date; ?>>
					<input type="hidden" name="period" value=<?php echo  $period; ?>>
					<div class="field-wrapper">
						<button type="submit">Submit</button>
					</div>
				</form>
			  </div>
			</div>
		  </div>
		</div>
		
	</body>
</html>