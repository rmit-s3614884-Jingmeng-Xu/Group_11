<?php
error_reporting(E_ALL^E_NOTICE);
session_start();
unset($_SESSION['user']);
unset($_SESSION['pms']);
header ("Location:index.php") ;    
?>
