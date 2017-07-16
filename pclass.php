<?php
include_once('parent.php');
session_start();
$conn = mysqli_connect("localhost","root","","user") or die($conn);
$id1 = mysqli_real_escape_string($conn,$_SESSION['id']);
$id = substr($id1, 0,-1)."S";
$db = mysqli_query($conn,"SELECT * FROM user where username='$id'");
$arr = mysqli_fetch_array($db);
$c = $arr['class'];
 $db1 = mysqli_query($conn,"SELECT * FROM user where class='$c'");
 $db2 = mysqli_query($conn,"SELECT * FROM user where class='$c'");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			text-align: center;
		}
	</style>
</head>
<body>
	<h1><?php echo $c; ?></h1>
	<h3>Class Teacher</h3>
	<p><?php while( $arr=mysqli_fetch_array($db1)){ if(substr($arr['username'], -1)=='T'){echo( $arr['username']); }}?></p>
	<h3>Students List</h3>
	<p><?php 
	$count=1; 
	

	while($array = mysqli_fetch_array($db2)){
		        if(substr($array['username'], -1)=='S'){
				echo '<p>'.$count.".".$array['username']."</p>";
				$count++;
			}
		} ?>
			
	</p>


</body>
</html>