<?php
error_reporting(E_ALL^E_NOTICE);
session_start() ;              
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />" ;
if (!isset ($_SESSION['user']))
{
	header ("Location:login.php") ;   
	exit ;
}      
                 

if (isset($_GET['event_id'])) {
    
    $event_id=trim($_GET['event_id']);    
        
    require_once('mysql_connect.php');
    
    $sql = "select count(*) as num from joins where event_id=" . $event_id;
    $result=mysqli_query($dbc,$sql) or die(mysqli_error($dbc));
    $row=mysqli_fetch_array($result); 
    if($row['num'] >= 15) {
        mysqli_close($dbc);
        echo "<script language='javascript'>" ;
        echo "alert('join max num 15!');" ;
        echo "window.location.href='search.php';";
        echo "</script>"; 
        die();        
    
    }
        
    
    
    $sql = "select * from joins where event_id=" . $event_id . " and join_user='".$_SESSION['user']."'";
    $result=mysqli_query($dbc,$sql) or die(mysqli_error($dbc));
    $row=mysqli_fetch_array($result); 
    
    if(!$row) {    
        $qry="insert into joins(event_id, join_user, create_time) values('{$event_id}','{$_SESSION['user']}',NOW())";
        
    
        $result=mysqli_query($dbc,$qry) or die(mysqli_error($dbc));
    
        mysqli_close($dbc);
        echo "<script language='javascript'>" ;
        echo "alert('join success!');" ;
        echo "window.location.href='search.php';";
        echo "</script>"; 
    } else {
        mysqli_close($dbc);
        echo "<script language='javascript'>" ;
        echo "alert('already join!');" ;
        echo "window.location.href='search.php';";
        echo "</script>";        
        
    }
    

} else {
    echo "<script language='javascript'>" ;
    echo "alert('param error!');" ;
    echo "window.location.href='search.php';";
    echo "</script>";
}

