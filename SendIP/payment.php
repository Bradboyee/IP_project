<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment | Customer</title>
    <link rel="stylesheet" href="./css/style.css">
    
</head>
<body>
    <ul class="nav">
		<a href="./selectdriver.php"><li>Select Driver</li></a>
		<a href="./payment.php"><li>Payment</li></a>
		<a href="./logout.php"><li>Log out</li></a>
	</ul>
		<div class="wrapper">
		  <div class="rec-prism">
			<div class="face face-front">
			  <div class="content">
				<h2>กรอกข้อมูลธนาคาร</h2>
				<form action="insertpayment.php" method="post">
					<h1>ชื่อธนาคาร</h1>
					<select name="bankname" id="bankname">
						<option value="BAY">ธนาคารกรุงศรีอยุธยา</option>
						<option value="UOB">ธนาคารยูโอบี</option>
						<option value="KBANK">ธนาคารกสิกรไทย</option>
						<option value="KTB">ธนาคารกรุงไทย</option>
						<option value="BBL">ธนาคารกรุงเทพ</option>
						<option value="TMB">ธนาคารทหารไทย</option>
						<option value="SCB">ธนาคารไทยพาณิชย์</option>
						<option value="CIMB">ธนาคารซีไอเอ็มบี</option>
						<option value="Aomsin">ธนาคารออมสิน</option>
					</select>
				  <div class="field-wrapper">
					<input type="text" name="bankno" placeholder="เลขบัญชี" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
					<label>เลขบัญชี  (XXX-XXX-XXXX)</label>
				  </div>
				  <div class="field-wrapper">
					<input type="text"  name="accname" placeholder="ชื่อบัญชี">
					<label>ชื่อบัญชี</label>
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