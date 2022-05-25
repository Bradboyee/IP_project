<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccine | Driver</title>
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
				<h2>ข้อมูลวัคซีน</h2>
				<form action="insertvac.php" method="post">
				  <div class="field-wrapper">
					<input type="text" id="Vaccine_Product_First" name="VaccineProductFirst" placeholder="วัคซีนที่ได้รับเข็มแรก "> 
					<label>วัคซีนที่ได้รับเข็มแรก </label>
				  </div>
				  <div class="field-wrapper">
					<input type="text" id="Vaccine_Product_Sec" name="VaccineProductSec" placeholder="วัคซีนที่ได้รับเข็มสอง ">
					<label>วัคซีนที่ได้รับเข็มสอง </label>
				  </div>
				  <div class="field-wrapper">
					<input type="text" id="Vaccine_Product_Third" name="VaccineProductThird" placeholder="วัคซีนที่ได้รับเข็มสาม ">
					<label>วัคซีนที่ได้รับเข็มสาม </label>
				  </div>
				  <div class="field-wrapper">
					<input type="text" id="Vaccine_VaccinatedNumber" name="VaccineVaccinatedNumber" placeholder="จำนวนวัคซีนที่ได้รับทั้งหมด ">
					<label>จำนวนวัคซีนที่ได้รับทั้งหมด </label>
				  </div>
				  <h1>วันที่ได้รับวัคซีน </h1>
				  <input type="date" id="Vaccine_Date" name="VaccineDate" placeholder="วันที่ได้รับวัคซีน ">
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