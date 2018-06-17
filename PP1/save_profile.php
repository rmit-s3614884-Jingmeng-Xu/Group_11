<?php
error_reporting(E_ALL^E_NOTICE);
session_start() ;              
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />" ;
if (!isset ($_SESSION['user']))
{
	header ("Location:login.php") ;   
	exit ;
}      
                 

if (isset($_POST['username']) && isset($_POST['name']) && isset($_POST['address'])) {
    
    $user_name=trim($_POST['username']);    
    $name=trim($_POST['name']);    
    $address=trim($_POST['address']);    
   
    require_once('mysql_connect.php');
    $qry="update users set Name='{$name}',Address='{$address}' where Username='$user_name'";
    

    $result=mysqli_query($dbc,$qry) or die(mysqli_error($dbc));

    mysqli_close($dbc);
    echo "<script language='javascript'>" ;
    echo "alert('save success!');" ;
    echo "window.location.href='profile.php';";
    echo "</script>"; 

} else {
    echo "<script language='javascript'>" ;
    echo "alert('param error!');" ;
    echo "window.location.href='profile.php';";
    echo "</script>";
}

