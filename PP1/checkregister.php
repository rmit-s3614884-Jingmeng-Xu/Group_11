<?php
function sendmail($email_address, $content) {
    date_default_timezone_set('Asia/Shanghai');  // 'Asia/Chongqing' or 'PRC'  
    require_once ('mail.class.php');   
      
    $smtpserver = "ssl://smtp.qq.com";//SMTP服务器   
    $smtpserverport = 465;//SMTP服务器端口   
    $smtpusermail = "1667073084@qq.com";//SMTP服务器的用户邮箱   
    $smtpemailto = $email_address;//发送给谁   
    //$smtpemailto = "734322210@qq.com";
    $smtpuser = "1667073084@qq.com";//SMTP服务器的用户帐号   
    $smtppass = "nmrvyqfarrmhehcb";//SMTP服务器的用户密码，此例为163邮箱的第三方授权登录密码   
    $mailsubject = "register";//邮件主题   
    $mailbody = $content ;//邮件内容   
    $mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件   
      
    $smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.   
    $smtp->debug = true;//是否显示发送的调试信息  
    $res=$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype); 
}

error_reporting(E_ALL^E_NOTICE);
session_start() ;                  
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />" ;
if (isset ($_SESSION['user']))
{
	header ("Location:index.php") ;  
	exit ;
}                       
$user_name=trim($_POST['username']);   
$name=trim($_POST['name']); 
$password=trim($_POST['password']);
$repassword=trim($_POST['repassword']);
// $access = $_POST['access'];
$access = 1;
if($user_name=="" || $password=="" || $repassword=="" || $name == "")
{
	echo "<script language='javascript'>" ;
	echo "alert('username or password is null!');" ;
	echo "window.location.href='register.php';";
	echo "</script>";
	exit();
}

if ($repassword != $password) {   
	echo "<script language='javascript'>" ;
	echo "alert('password and repassword is no equal!');" ;
	echo "window.location.href='register.php';";
	echo "</script>";
	exit();
}

//check username
require_once('mysql_connect.php');
$qry="select * from users where Username='$user_name'";
$result=mysqli_query($dbc,$qry) or die(mysqli_error($dbc));
$row=mysqli_fetch_array($result);
//$row = {};
// $row['Access'] = 1;
//echo $num;
if(!$row)
{ 
    
    $sql = "insert into users(Username, Access, Password, Created, Name,Address,Status) values('{$user_name}', '{$access}', '{$password}', NOW(), '{$name}','', 0)";
    $result=mysqli_query($dbc,$sql) or die(mysqli_error($dbc));

	   mysqli_close($dbc);
	   
    // send email
    $content = "please visite linke below, active user </br> http://149.28.170.225/active.php?username=" . $user_name . '&token=' . md5($user_name);
    sendmail($user_name, $content);
    die();
    echo "<script language='javascript'>" ;
    echo "alert('register success, please review email and active user');" ;
    echo "window.location.href='login.php';";
    echo "</script>"; 	   
}
else
{
	mysqli_close($dbc);
	echo "<script language='javascript'>" ;
	echo "alert('username is exist');" ;
	echo "window.location.href='register.php';";
	echo "</script>";
}
?>
