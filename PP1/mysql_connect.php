<?php
include "mysql_config.php";

//connect
$dbc=@mysqli_connect($db_host,$db_user,$db_pass) OR die('cannot connect!'.mysqli_error($dbc));
//select db
@mysqli_select_db($dbc,$db_name) OR die('cannot select!'.mysqli_error($dbc));
mysqli_query($dbc,"SET NAMES 'UTF8'");
?>
