<?php
error_reporting(E_ALL^E_NOTICE);
session_start() ;              
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />" ;
if (isset ($_SESSION['user']))
{
	header ("Location:index.php") ;   
	exit ;
}                       
$user_name=trim($_POST['username']);   
$password=trim($_POST['password']);
$repassword=trim($_POST['repassword']);
if($user_name=="" || $password=="")
{
	echo "<script language='javascript'>" ;
	echo "alert('username or password is null!');" ;
	echo "window.location.href='login.php';";
	echo "</script>";
	exit();
}
if ($password != $repassword) {
	echo "<script language='javascript'>" ;
	echo "alert('password and repassword is not equal!');" ;
	echo "window.location.href='login.php';";
	echo "</script>";
	exit();

}
//check username
require_once('mysql_connect.php');
$qry="update users set Password='$password' where Username='$user_name'";
$result=mysqli_query($dbc,$qry) or die(mysqli_error($dbc));

mysql_close();
echo "<script language='javascript'>" ;
echo "alert('init password success!');" ;
echo "window.location.href='login.php';";
echo "</script>";

?>
