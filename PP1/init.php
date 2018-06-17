<?php
error_reporting(E_ALL^E_NOTICE); 
session_start();
if (isset($_SESSION['user']))
{
	header("Location:index.php"); 
	exit();
}

if(!(isset($_GET['username']) and isset($_GET['token']))) {
    echo "param error";
    die();
}

if($_GET['token'] != md5($_GET['username'])) {
   echo "token error";
   die();    
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
		var password = $("#password").val();
		var repassword = $("#repassword").val();

		if( password.length == 0){
		    alert("password is null");
			$("#password").focus();
			return false;
		}		
		if (password != repassword) {
		    alert("password and repassword is no equel");
			$("#password").focus();
			return false;		    
		}
		return true;
	}
</script>
</head> 
<body> 
<div class="content">

<form name="login" method="post" action="save_init.php">

<div class="panel">
    <input type="hidden" name="username" value="<?php echo $_GET['username'];?>"/>
   <div class="group"> <label>password</label> <input placeholder="input password" type="password" name="password" id="password"></div>
   <div class="group"> <label>repassword</label> <input placeholder="input repassword" type="password" name="repassword" id="repassword"></div>
   
   <div class="login"> <button onclick="return checkform()" type="submit">init</button></div>
</div>
</div>

</form>

</div>

</body>  
</html>