<?php
error_reporting(E_ALL^E_NOTICE);
session_start() ;              
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />" ;
if (isset ($_SESSION['user']))
{
	header ("Location:index.php") ;   
	exit ;
}    

if (isset($_GET['username']) && isset($_GET['token'])) {
    $user_name=trim($_GET['username']);
    $token = trim($_GET['token']);
    if ($token !== md5($user_name)) {
        echo "token error";
    } else {
        require_once('mysql_connect.php');
        $qry="update users set status=1 where Username='$user_name'";
        $result=mysqli_query($dbc,$qry) or die(mysqli_error($dbc));  
        echo "active user success";
    }
    
} else  {
    echo "param error";
}                   
