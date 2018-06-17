<?php
error_reporting(E_ALL^E_NOTICE); 
session_start();
if (isset($_SESSION['user']))
{
	header("Location:index.php"); 
	exit();
}
?>
<!doctype html>  
<html>  
<head lang="zh-CN">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<!-- Make sure that we can test against real IE8 --> 
<meta http-equiv="X-UA-Compatible" content="IE=8" /> 
<script type="text/javascript" src="js/jquery1.42.min.js"></script>
<link rel="stylesheet" href="css/login.css">
<title>login</title> 
<script>
    function checkform(){
	    var username = $("#username").val();
		var password = $("#password").val();
		if(username.length == 0){
		    alert("user is null");
			$("#username").focus();
			return false;
		}
		if( password.length == 0){
		    alert("password is null");
			$("#password").focus();
			return false;
		}		
		return true;
	}
</script>
</head> 
<body> 
<div class="content">

<form name="login" method="post" action="checklogin.php">

<div class="panel"><div class="group"> 
    <label>email</label> <input placeholder="input email" name="username" id="username"> </div><div class="group"> <label>password</label> <input placeholder="input password" type="password" name="password" id="password"></div><div class="login"> <button onclick="return checkform()" type="submit">login</button></div>
    <a style="float: right;margin-right: 30px;" href="register.php">register</a>
    <a style="float: left;margin-left: 30px;" href="forget.php">forget password</a>
</div>
</div>

</form>

</div>

</body>  
</html>