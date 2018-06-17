<?php
error_reporting(E_ALL^E_NOTICE);
session_start() ;                  
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />" ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Searching page</title>
<link rel="stylesheet" type="text/css" href="css/search.css" />
<link rel="stylesheet" type="text/css" href="css/home.css" />
<script type="text/javascript" src="js/home.js"></script>
</head>

<body>
	 

<div id="bar1">
 <?php require_once('menu.php'); ?>
	</div>

<div id="searchbar">
  <div id="search" 
    <?php 
    if(isset($_SESSION['user'])) {   
        echo  'style="margin-top: 100px;"';
    } else {
        echo  'style="margin-top: 0px;"';
        
    }
    ?>
    > 
    <form action="search.php" method="GET" >
    <span>
    
    <input type="text" class="form-control" name="keywords" 
    <?php 
    if (isset($_GET['keywords'])) {
       echo 'value="' . $_GET['keywords'] . '"';    
    }
    
    ?>
    
    > 
    </span>
    <div class="search-button" style="left: 540px;">
        <i class="icon-search-white"></i>
        <input type="submit" value="Search" style="width: 70px;height: 35px;background: #00a1d6;border: none;color: white;"/>
        
        </div>

    </form>
    </div>
	<div id="condition"  
    <?php 
    if(isset($_SESSION['user'])) {   
        echo  'style="margin-top: 10px;"';
    } else {
        echo  'style="margin-top: 50px;"';
        
    }
    ?>	    
    >
	 <a href="search.php"><div
	    <?php 
	    if(!isset($_GET['flag'])) {
	        echo 'class="on"';
	    }
	    ?>
	    >All</div></a>
		<a href="search.php?flag=1"><div
	    <?php 
	    if(isset($_GET['flag']) && 1 == $_GET['flag']) {
	        echo 'class="on"';
	    }
	    ?>		    
		    
		>Ongoing</div></a>
		<a href="search.php?flag=0"><div
	    <?php 
	    if(isset($_GET['flag']) && 0 == $_GET['flag']) {
	        echo 'class="on"';
	    }
	    ?>				    
		    
		>Closed</div></a>
	</div>
</div>
	
	<div id="events" style="margin-top: 50px;">
	    
  <?php 
  $keywords = "";
  if(isset($_GET['keywords'])){
      $keywords = $_GET['keywords'];
  }
  $where = 'and 1=1 ';
  if(isset($_GET['flag'])) {
    $now_time = date('Y-m-d H:i:s');
    if(1 == $_GET['flag']) {
        $where .= "and start_time > '" . $now_time . "' ";
    } else {
        $where .= "and start_time <= '" . $now_time . "' ";    
    }
  }

   require_once('mysql_connect.php');
  $qry="select * from events where title like '%$keywords%' {$where} order by create_time desc";
  
  //var_dump($qry);die();
  $result=mysqli_query($dbc,$qry) or die(mysqli_error($dbc));
  while($row=mysqli_fetch_array($result)) {

  ?>	    
		<div class="event">
		<image class="img" src="image/userimage.png"></image>
		<span class="user"><?php echo $row['create_user'];?></span>
		<span class="title">Title:<?php echo $row['title'];?><br></span>
		<span class="content">Content:<?php echo $row['content'];?></span>
			<span class="date">Start date:<?php echo $row['start_time'];?></span>
			
			<?php 
			$now_time = strtotime(date('Y-m-d H:i:s'));
			$start_time = strtotime($row['start_time']);
			if ($now_time >= $start_time) {
			?>
			<span class="close">Closed</span>
			<?php 
   } else {
     if (isset ($_SESSION['user'])) {
			?>
			<span class="button"><a href="join_event.php?event_id=<?php echo $row['id'];?>" style="color:white">Join</a></span>
			<?php 
   }
   }
			?>
		</div>
		
		<?php 
  }
		?>

	</div>
	</div>
</body>
</html>