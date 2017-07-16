<?php
	session_start();
	$reciever=$_REQUEST['rname'];
	$message=$_REQUEST['message'];
 	$conn = mysqli_connect("localhost","root","","user") or die($conn);
 	$user = mysqli_real_escape_string($conn,$_SESSION['user']);
 	
 	$db1 = mysqli_query($conn,"INSERT INTO message(sender , reciever , message) VALUES ('$user','$reciever','$message') ");
 	$db = mysqli_query($conn,"SELECT * from message where reciever = '$user'")or die("can't connect ".mysqli_error($conn));
 	
 	
 
 	
 	while($row = mysqli_fetch_array($db)){
 		//echo "<span class = 'uname'>".$row['reciever']."</span>: <span class = 'message'>".$row['message']."<br>";
 		echo "<p>".$row['sender']."&nbsp".$row['message']."</p>";
 	}
		
?>