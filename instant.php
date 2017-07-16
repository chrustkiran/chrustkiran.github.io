<?php

session_start();
$sener = $_COOKIE['sen'];

$conn = mysqli_connect("localhost","root","","user") or die($conn);
 	$user = mysqli_real_escape_string($conn,$_SESSION['user']);
 	
$db = mysqli_query($conn,"SELECT * from message ")or die("can't connect ".mysqli_error($conn));
 	
 
 
 	
 	while($row = mysqli_fetch_array($db)){
 		//echo "<span class = 'uname'>".$row['reciever']."</span>: <span class = 'message'>".$row['message']."<br>";
 		if(($row['sender'] == $sener and $row['reciever'] == $user)){
 			echo "<p id=left>".$row['sender'].":&nbsp".$row['message']."</p> </br> </br> </br>";
 			# code...
 		}
 		elseif (($row['sender'] == $user and $row['reciever'] == $sener)) {
 			echo "<p id=right>".$row['sender'].":&nbsp".$row['message']."</p> </br> </br>  </br>";# code...
 		}
 		else{
 			echo "";
 		}
 		
 	}



 ?>
<style type="text/css">
	p{
		font-size: 12px;
	}
</style>