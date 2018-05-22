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
$access = $_POST['access'];
if($user_name=="" || $password=="" || $repassword=="")
{
	echo "<script language='javascript'>" ;
	echo "alert('username or password is null!');" ;
	echo "window.location.href='index.php';";
	echo "</script>";
	exit();
}

if ($repassword != $password) {   
	echo "<script language='javascript'>" ;
	echo "alert('password and repassword is no equal!');" ;
	echo "window.location.href='index.php';";
	echo "</script>";
	exit();
}

//check username
require_once('mysql_connect.php');
$qry="select * from users where Username='$user_name'";
$result=mysql_query($qry) or die(mysql_error());
$row=mysql_fetch_array($result,MYSQL_ASSOC);
//$row = {};
//$row['Access'] = 1;
//echo $num;
if(!$row)
{ 
   
    $sql = "insert into users(Username, Access, Password, Created, Name, Status) values('{$user_name}', '{$access}', '{$password}', NOW(), '{$user_name}', 0)";
    $result=mysql_query($sql) or die(mysql_error());

	   mysql_close();
	   
    echo "<script language='javascript'>" ;
    echo "alert('register success');" ;
    echo "window.location.href='index.php';";
    echo "</script>"; 	   
}
else
{
	mysql_close();
	echo "<script language='javascript'>" ;
	echo "alert('username is exist');" ;
	echo "window.location.href='index.php';";
	echo "</script>";
}
?>
