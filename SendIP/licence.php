<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licence | Driver</title>
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
				<h2>ข้อมูลใบอนุญาติขับรถ</h2>
				<form action="insertlicence.php" method="post">
				  <h1>วันออกใบขับขี่ </h1>
				  <input type="date" id="Licence_IssueDate" name="LicenceIssueDate" placeholder="วันออกใบขับขี่ ">
				  <h1>วันหมดอายุใบขับขี่</h1>
				  <input type="date" id="Licence_ExpiryDate" name="LicenceExpiryDate" placeholder="วันหมดอายุใบขับขี่ ">
				  <div class="field-wrapper">
					<input type="text" id="Licence_LicencePlate" name="LicenceLicencePlate" placeholder="ป้ายทะเบียนรถ ">
					<label>ป้ายทะเบียนรถ </label>
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