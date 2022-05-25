<!doctype html>
<html>
<head>
<title>Sign up for Driver</title>
<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<ul class="nav">
		<a href="./login.php"><li>Login</li></a>
		<a href="./registerDriver.php"><li>Sign up for Driver</li></a>
		<a href="./registerUser.php"><li>Sign up for Customer</li></a>
	</ul>
	<div class="wrapper">
		<div class="rec-prism">
			<div class="face face-front">
			  <div class="content">
				<h2>Sign up for Driver</h2>
				<form action="insertdriver.php" method="post">
					<div class="field-wrapper">
						<input type="text" id="name" name="name"placeholder="Firstname & Lastname">
						<label>Firstname & Lastname</label>
					</div>
					<div class="field-wrapper">
						<input type="tel" name="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" id="phone" placeholder="Phone number (XXX-XXX-XXXX)">
						<label>Phone number (XXX-XXX-XXXX)</label>
					</div>
					<div class="field-wrapper">
						<input type="text"name="address"  placeholder=" ที่อยู่ ">
						<label>Address</label>
					</div>
					<div class="field-wrapper">
						<input type="text"name="workplace"  placeholder=" สถานที่ทำงาน ">
						<label>Workplace</label>
					</div>
					<div class="field-wrapper">
						<input type="password" name="password" placeholder="password">
						<label>Password</label>
					</div>
					<div class="field-wrapper">
						<button type="submit" value = "Submit">Sign up for Driver</button>
				  </div>
				</form>
			  </div>
			</div>
		</div>
	</div>
</body>
</html>