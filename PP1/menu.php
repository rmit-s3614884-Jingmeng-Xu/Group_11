<?php
error_reporting(E_ALL^E_NOTICE);
session_start() ;                  
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />" ;
?>


  <div >
    <image src="image/1.png" id="logo"></image>
  </div>
 

  <?php 
  if (isset ($_SESSION['user'])) {
  ?>
  <a href="logout.php"><div id="square1" >Logout</div></a>
  <a href="profile.php"><div id="square3" >About</div></a>
  <?php } else { ?>
  
  
  <div id="square1" ><span id="lg"><a href="login.php" style="text-decoration:none;color:black">Login</a></span> / <span id="re"><a href="register.php" style="text-decoration:none;color:black">Register</a></span></div>

  <?php } ?>
	<!--<div id="square2" >Help</div>-->

	
	<a href="index.php"><div id="square4" >Home</div></a>
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
      
    <?php 
      require_once('mysql_connect.php');
      $qry="select count(*) as num from events where create_user='{$_SESSION['user']}'";
      $result=mysqli_query($dbc,$qry) or die(mysqli_error($dbc));
      $row=mysqli_fetch_array($result);   

      $qry="select count(*) as num from joins where join_user='{$_SESSION['user']}'";
      $result_join=mysqli_query($dbc,$qry) or die(mysqli_error($dbc));
      $row_join=mysqli_fetch_array($result_join);   
    
    ?>
    <td><?php echo $row_join['num'];?></td>
    <td><?php echo $row['num'];?></td>
  </tr>
</table>
  <div id="shadow1">
    
    <div id="divcss5">
      <image src="image/userimage.png" id="userimage"></image>
      <span id="profileusername"><?php echo $_SESSION['user'];?> <a href="profile.php" class="myButton"><span id="editprofile">Edit profile</span> </a></span> 
    </div>
    
    
    </div>
    
 <?php } ?>   
  