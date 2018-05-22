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
  <div >
    <image src="image/1.png" id="logo"></image>
  </div>
  <a href="profile.html">
  </a> 
  

  <?php 
  if (isset ($_SESSION['user'])) {
  ?>
  <a href="logout.php"><div id="square1" >Logout</div></a>
  <?php } else { ?>
  
  
  <div id="square1" ><span id="lg" onclick="displayLogin()">Login</span> / <span id="re" onclick="displayRegister()">Register</span></div>

  <?php } ?>
	<div id="square2" >Help</div>
	<a href="profile.html"><div id="square3" >About</div></a>
	
	<a href="home.html"><div id="square4" >Home</div></a>
  </div>
  

  <?php 
  if (isset ($_SESSION['user'])) {
  ?>

<div  id="barimage"> 
  </div> 

	<table id="times" style="top: 70px;">
  <tr>
    <td>Participating </td>
    <td>Published</td>
  </tr>
  <tr>
    <td>0</td>
    <td>0</td>
  </tr>
</table>
  <div id="shadow1">
    
    <div id="divcss5">
      <image src="image/userimage.png" id="userimage"></image>
      <span id="profileusername"><?php echo $_SESSION['user'];?> <a href="editprofile.html" class="myButton"><span id="editprofile">Edit profile</span> </a></span> 
    </div>
    
    
    </div>
    
 <?php } ?>   
  
<div class="container">
  <div class="row">
    <div class="input-group">
   <span>
        <input type="text" class="form-control">
        </span>
       <a href="search.html"><div class="search-button"><i class="icon-search-white"></i><span class="search-text">Search</span></div></a>
     
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