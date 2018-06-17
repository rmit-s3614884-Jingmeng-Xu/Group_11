<?php
error_reporting(E_ALL^E_NOTICE);
session_start() ;                  
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />" ;

if (!isset ($_SESSION['user']))
{
	header ("Location:login.php") ;   
	exit ;
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Uuser profile page</title>
<link rel="stylesheet" type="text/css" href="css/home.css" />
</head>

<body>
<div id="bar">
 <?php require_once('menu.php'); ?>




  <div id="tabs">
    <ul>
      <a href="profile.php"><li class="on">Profile</li></a>
		    <a href="createevent.php"><li>Publish event</li></a>
      <a href="participating.php"><li>Participating</li></a>
      <a href="published.php"><li>Published</li></a>
      <a href="aboutus.php"><li>Aboutus</li></a>
      <a href="logout.php"><li >Exit</li></a>
    </ul>
    <div>
        
        
     profile
     
     <?php 
     $user_name = $_SESSION['user'];
    require_once('mysql_connect.php');
    $qry="select * from users where Username='$user_name'";
    $result=mysqli_query($dbc,$qry) or die(mysqli_error($dbc));
    $row=mysqli_fetch_array($result);     
     
     ?>
     <form method="POST" action="save_profile.php">
     <p style="margin-top: 50px;margin-left: 40px;">email: <input readonly="readonly" value="<?php echo $row['Username'];?>" type="text" name="username" style="width: 200px;height: 30px;"/></p>
     <p style="margin-top: 20px;margin-left: 40px;">name: <input value="<?php echo $row['Name'];?>" type="text" name="name" style="width: 200px;height: 30px;"/></p>
     
     <p style="margin-top: 20px;margin-left: 40px;">address: <input value="<?php echo $row['Address'];?>" type="text" name="address" style="width: 200px;height: 30px;"/></p>
     <p style="margin-top: 20px;margin-left: 40px;"><input type="submit" value="save" /></p>
     </form>
    </div>
    <div class="hide"> </div>
    <div class="hide"> </div>
    <div class="hide"> </div>
    <div class="hide"> </div>
  </div>
</div>

</body>
</html>