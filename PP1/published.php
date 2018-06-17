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
	    	<a href="createevent.php"><li>Publish event</li></a>
      <a href="participating.php"><li>Participating</li></a>
      <a href="published.php"><li class="on">Published</li></a>
      <a href="logout.php"><li >Exit</li></a>
    </ul>
    <div>
        
        
     Published
     
     <table border="1" style="margin-top: 50px;margin-left: 50px;">
      <tr>
        <th>id</th>
        <th>title</th>
        <th>content</th>
        <th>start_time</th>
      </tr>
     
     <?php 
     $user_name = $_SESSION['user'];
    require_once('mysql_connect.php');
    $qry="select * from events where create_user='$user_name'";
    $result=mysqli_query($dbc,$qry) or die(mysqli_error($dbc));
    while($row=mysqli_fetch_array($result)) {   
     
     ?>
      <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['title'];?></td>
        <td><?php echo $row['content'];?></td>
        <td><?php echo $row['start_time'];?></td>
      </tr>  
      
      <?php 
      }
      ?>   
     
    </div>
    <div class="hide">发布活动 </div>
    <div class="hide"> 参与的活动</div>
    <div class="hide">发布过的活动 </div>
    <div class="hide">退出 </div>
  </div>
</div>

</body>
</html>