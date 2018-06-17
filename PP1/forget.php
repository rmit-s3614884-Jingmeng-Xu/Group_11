<?php
function sendmail($email_address, $content) {
    date_default_timezone_set('Asia/Shanghai');  // 'Asia/Chongqing' or 'PRC'  
    require_once ('mail.class.php');   
      
    $smtpserver = "smtp.163.com";//SMTP服务器   
    $smtpserverport =25;//SMTP服务器端口   
    $smtpusermail = "sqr129@163.com";//SMTP服务器的用户邮箱   
    $smtpemailto = $email_address;//发送给谁   
    $smtpuser = "sqr129@163.com";//SMTP服务器的用户帐号   
    $smtppass = "sqr321";//SMTP服务器的用户密码，此例为163邮箱的第三方授权登录密码   
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
if(isset($_GET['username'])) {
    
    echo "<script language='javascript'>" ;
    echo "alert('username is null!');" ;
    echo "window.location.href='login.php';";
    echo "</script>";
    exit();

}

// send email
$content = "please visit http://127.0.0.1/PP1/init.php?username=" . $user_name . '&token=' . md5($user_name) . ', init password';
sendmail($user_name, $content);
echo "<script language='javascript'>" ;
echo "alert('send success, please review email and init password');" ;
echo "window.location.href='login.php';";
echo "</script>"; 	   

