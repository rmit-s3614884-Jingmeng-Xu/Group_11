<?php
error_reporting(E_ALL^E_NOTICE);
session_start() ;                  
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />" ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Home page</title>
<link rel="stylesheet" type="text/css" href="css/home.css" />
<script type="text/javascript" src="js/home.js"></script>
</head>

<body>
<div id="bar1">
<?php require_once('menu.php'); ?>
  
<div class="container">
  <div class="row">
    <div class="input-group" style="top:30%">
        <form action="search.php" method="GET" >
        <span><input type="text" class="form-control" name="keywords"></span>
        <div class="search-button">
            <i class="icon-search-white"></i>
            <input type="submit" value="Search" style="width: 70px;height: 35px;background: #00a1d6;border: none;color: white;"/>    
            
        </div>
        
        <!--<a href="search.html"><div class="search-button"><i class="icon-search-white"></i><span class="search-text">Search</span></div></a>-->
       </form>
    </div>
  </div>
</div>
	<div id="logindiv" ><div id="login_frame">  
  	<div id="close" onclick="hideLogin()">x</div>
    <p id="image_logo"><img src="image/Login.png"></p>  
  
    <form method="post" action="checklogin.php">  
  
        <p><label class="label_input">User name</label><input type="text" id="username" name="username" class="text_field"/></p>  
        <p><label class="label_input">Password</label><input type="password" id="password" name="password" class="text_field"/></p>  
  
        <div id="login_control">  
            <input type="submit" id="btn_login" value="Login" onclick="return login();"/>  
            <a id="forget_pwd" href="forget_pwd.html">Forget the password?</a>  
        </div>  
    </form>  
</div> </div>
	
	<div id="registerdiv">
	
	<div id="login_frame">
		<div id="closer" onclick="hideRegister()">x</div>
        <p id="image_logo"></p>

        <form method="post" action="checkregister.php">

            <p>
                <label class="label_input">User Name</label>
                <input type="text" id="username" name="username" class="text_field" />
            </p>
            <p>
                <label class="label_input">Password</label>
                <input type="password" id="regpassword" name="password" class="text_field" />
            </p>
            <p>
                <label class="label_input">Confirm</label>
                <input type="password" id="regconfirmpassword" name="repassword" class="text_field" />
            </p>
            <div id="login_control">
                <spam align="center">
                    <input type="submit" id="btn_login" value="Register" onclick="return register();" />
                </spam>
            </div>

        </form>
    </div>
	</div>
</body>
</html>