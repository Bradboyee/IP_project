<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Login | เข้าสู่่ระบบ</title>
	<link rel="stylesheet" href="./css/style.css">

</head>

<body>
	<ul class="nav">
		<a href="./login.php">
			<li>Login</li>
		</a>
		<a href="./registerDriver.php">
			<li>Sign up for Driver</li>
		</a>
		<a href="./registerUser.php">
			<li>Sign up for Customer</li>
		</a>
	</ul>
	<div class="wrapper">
		<div class="rec-prism">
			<div class="face face-front">
				<div class="content">
					<h2>Sign in</h2>
					<form action="loginphp.php" method="post">
						<div class="field-wrapper">
							<input type="tel" name="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" id="phone"
								placeholder="Phone number (XXX-XXX-XXXX)">
							<label>Phone number (XXX-XXX-XXXX)</label>
						</div>
						<div class="field-wrapper">
							<input type="password" name="password" placeholder="password">
							<label>Password</label>
						</div>
						<h1>Login As</h1>
						<label class="container">Driver<input name="check" type="radio" id="checkbox"
								value="driver" /><span class="checkmark"></span></label>
						<label class="container">Customer<input name="check" type="radio" id="checkbox"
								value="customer" /><span class="checkmark"></span></label>
						<div class="field-wrapper">
							<button type="submit" value="Submit">Log in</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>