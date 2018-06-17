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
      <a href="profile.php"><li>Profile</li></a>
	    	<a href="createevent.php"><li class="on">Publish event</li></a>
      <a href="participating.php"><li>Participating</li></a>
      <a href="published.php"><li>Published</li></a>
      <a href="logout.php"><li >Exit</li></a>
    </ul>
    <div>
        
        
     Publish event
     
     <?php 
     $user_name = $_SESSION['user'];
    require_once('mysql_connect.php');
    $qry="select * from users where Username='$user_name'";
    $result=mysqli_query($dbc,$qry) or die(mysqli_error($dbc));
    $row=mysqli_fetch_array($result);     
     
     ?>
     <form method="POST" action="save_createevent.php">
                <p style="margin-top: 50px;margin-left: 40px;"> 
                    <span>title :</span>  
                     <input type="text" name="title" placeholder="your event title">  
                </p>
                <p style="margin-top: 20px;margin-left: 40px;">  
                     <span>start time :</span>  
                     <input type="datetime-local" name="start_time" />  
                </p>
                   
                <p style="margin-top: 20px;margin-left: 40px;"> 
                     <span>Host place :</span>  
                     <input type="location" name="place" placeholder="where?">  
                </p>         
                <p style="margin-top: 20px;margin-left: 40px;">  
                    <span>phone:</span>  
                    <input type="text" name="phone" placeholder="Please input 9 number">  
                </p>  
                <p style="margin-top: 20px;margin-left: 40px;"> 
                    <span>content:</span>  
                    <textarea id="message" name="content" placeholder="About content" style="width:250px;height:80px"></textarea>  
                </p>  
                <p style="margin-top: 10px;margin-left: 40px;">  
                    <input type="submit" class="button" value="Submit">  
                </p>  
     </form>
    </div>
    <div class="hide">发布活动 </div>
    <div class="hide"> 参与的活动</div>
    <div class="hide">发布过的活动 </div>
    <div class="hide">退出 </div>
  </div>
</div>

</body>
</html>