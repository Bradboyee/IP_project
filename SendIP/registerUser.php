<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sign up for Customer</title>
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
					<h2>Sign up for Customer</h2>
					<form action="insertuser.php" method="post">
						<div class="field-wrapper">
							<input type="email" id="email" name="email" placeholder=" อีเมล | email "> 
							<label>Email</label>
						</div>
						<div class="field-wrapper">
							<input type="text" id="address" name="address" placeholder=" ที่อยู่ | address ">
							<label>Address</label>
						</div>
						<div class="field-wrapper">
							<input type="text" id="name" name="name" placeholder=" ชื่อ & สกุล | Firstname & Lastname ">
							<label>Firstname & Lastname</label>
						</div>
						<div class="field-wrapper">
							<input type="tel" id="tel" name="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Phone number (XXX-XXX-XXXX)"> 
							<label>Phone number (XXX-XXX-XXXX)</label>
						</div>
						<h1>Birthday</h1>
							<input type="date" id="birthday" name="birthday" placeholder=" วันเกิด | birthday"> 
						<div class="field-wrapper">
							<input type="password" id="password" name="password" placeholder=" รหัสผ่าน | Password ">
							<label>Password</label>
						</div>
						<h1>Gender:</h1>
						<label class="container">Male<input name="check" type="radio" id="checkbox" value="Male" /><span class="checkmark"></span></label>
						<label class="container">Female<input name="check" type="radio" id="checkbox" value="Female" /><span class="checkmark"></span></label>
						<div class="field-wrapper">
							<button type="submit" value="Submit">Sign up for Customer</button>
					  </div>
					</form>
				  </div>
				</div>
		</div>
	</div>
	</form>
	</body>

</html>