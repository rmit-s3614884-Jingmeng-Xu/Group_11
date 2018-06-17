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
if($user_name=="" || $password=="")
{
	echo "<script language='javascript'>" ;
	echo "alert('username or password is null!');" ;
	echo "window.location.href='index.php';";
	echo "</script>";
	exit();
}
//check username
require_once('mysql_connect.php');
$qry="select * from users where Username='$user_name' and Password='$password'";
$result=mysqli_query($dbc,$qry) or die(mysqli_error($dbc));
$row=mysqli_fetch_array($result);
//echo $num;
if($row)
{
    if(1 !== intval($row['status'])) {
        mysqli_close($dbc);
        echo "<script language='javascript'>" ;
        echo "alert('user is not activated');" ;
        echo "window.location.href='login.php';";
        echo "</script>"; 
    } else {
        $_SESSION['user'] = $user_name;
        $_SESSION['pms']= $row['Access'];
        mysqli_close($dbc);
        echo "<script language='javascript'>window.location.href='index.php';</script>" ;		
    }
}
else {
    mysqli_close($dbc);
    echo "<script language='javascript'>" ;
    echo "alert('username or password is error');" ;
    echo "window.location.href='login.php';";
    echo "</script>";
}

?>
