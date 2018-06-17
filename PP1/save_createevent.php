<?php
error_reporting(E_ALL^E_NOTICE);
session_start() ;              
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />" ;
if (!isset ($_SESSION['user']))
{
	header ("Location:login.php") ;   
	exit ;
}      
                 

if (isset($_POST['title']) 
    && isset($_POST['content']) 
    && isset($_POST['place'])
    && isset($_POST['phone'])
    && isset($_POST['start_time'])
    ) {
    
    $title=trim($_POST['title']);    
    $content=trim($_POST['content']);    
    $place=trim($_POST['place']);    
    $phone=trim($_POST['phone']);
    $start_time=trim($_POST['start_time']);  
    
    $start_time = str_replace("T"," ",$start_time); 
    

    require_once('mysql_connect.php');
    $qry="insert events(title, content, place, phone, create_user, start_time, create_time) values('{$title}','{$content}','{$place}','{$phone}','{$_SESSION['user']}','{$start_time}',NOW())";
    

    $result=mysqli_query($dbc,$qry) or die(mysqli_error($dbc));

    mysqli_close($dbc);
    echo "<script language='javascript'>" ;
    echo "alert('create event success!');" ;
    echo "window.location.href='createevent.php';";
    echo "</script>"; 

} else {
    echo "<script language='javascript'>" ;
    echo "alert('param error!');" ;
    echo "window.location.href='createevent.php';";
    echo "</script>";
}

