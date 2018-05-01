<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Login page</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/tools.js" ></script>
	</head>
	
	<body>
		<div class="container">
			<div id="bar">
				<div id="logo">
					<image src="image/1.png" alt="Image not exist"></image>
				</div>
				<nav>
					<ul>
						<li><a class="link" href="index.php">Home</a></li>
						<li><a class="link" href="register.php">Register</a></li>
						<li><a class="link" href="about.php">About</a></li>		
					</ul>
				</nav>
			</div>
			
			<div class="main_container">
				<div id="register_frame">
					<form action="index.php" method="POST">
						<label>User name</label><input type="text" name="username" value="" id="username" class="text_field" required /><br><br>
						<label>Password</label><input type="password" name="password" value="" id="password" class="text_field" required /><br><br>
						<label>Confirm</label><input type="password" name="confirmpassword" value="" id="confirmpassword" class="text_field" required /><br><br>
						<div id="register_control">
							<input type="submit" id="register_button" value="Register" />
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</body>
</html>