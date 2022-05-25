<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATK | Driver</title>
    <link rel="stylesheet" href="./css/style.css">
    
</head>

<body>
		<ul class="nav">
		  <a href="./vaccine.php"><li>Vaccine</li></a>
		  <a href="./atk.php"><li>ATK</li></a>
		  <a href="./licence.php"><li>Licence</li></a>
		  <a href="./login.php"><li>Log out</li></a>
		</ul>
		<div class="wrapper">
		  <div class="rec-prism">
			<div class="face face-front">
			  <div class="content">
				<h2>ATK</h2>
				<form action="insertatk.php" method="post">
				  <div class="field-wrapper">
					<input type="text" id="ATK_DetectPlace" name="ATKDetectPlace" placeholder="สถานที่ตรวจ "> 
					<label>สถานที่ตรวจ </label>
				  </div>
				  <h1>วันที่ตรวจ </h1>
				  <input type="date" id="ATK_DetectDate" name="ATKDetectDate" placeholder="วันที่ตรวจ ">
				  <div class="field-wrapper">
					<input type="text" id="ATK_InfectedHistory" name="ATKInfectedHistory" placeholder="ประวัติการติดเชื้อ ">
					<label>ประวัติการติดเชื้อ </label>
				  </div>
				  <div class="field-wrapper">
					<input type="text" id="ATK_DetectResult" name="ATKDetectResult" placeholder="ผลลัพธ์การตรวจ ">
					<label>ผลลัพธ์การตรวจ </label>
				  </div>
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
