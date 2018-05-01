<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Home page</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	
	<body>
		<div class="container">
			<div id="bar">
				<div id="logo">
					<image src="image/1.png" alt="Image not exist"></image>
				</div>
				<nav>
					<ul>
						<li><a class="link" href="login.php">Login</a></li>
						<li><a class="link" href="register.php">Register</a></li>
						<li><a class="link" href="about.php">About</a></li>		
					</ul>
				</nav>
			</div>
			
			<div class="main_container">
				<div id="search_bar">
					<form action="index.php" method="POST">
						<input type="text" placeholder="Please enter the keyword">
						<div class="button" id="search">
							<input type="submit" value="search">
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
