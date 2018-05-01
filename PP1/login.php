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
				<div id="login_frame">
					<div id="login_logo"><img src="img/Login.png"></div>
					<form action="index.php" method="POST">
						<label>User name</label><input type="text" name="username" value="" id="username" class="text_field" required /><br><br>
						<label>Password</label><input type="password" name="password" value="" id="password" class="text_field" required /><br><br>
						<div id="L/R_control">
							<input type="submit" id="login_button" onclick="login()" value="Login"/>
							<a href="forget_pwd.php" id="forget_pwd">Forget your password?</a>
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
