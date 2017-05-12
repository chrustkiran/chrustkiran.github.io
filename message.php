<?php
	session_start();
 	$conn = mysqli_connect("sql9.freesqldatabase.com","sql9173811","hsR16bldP1","sql9173811") or die($conn);
 	$user = mysqli_real_escape_string($conn,$_SESSION['user']);
 	$db = mysqli_query($conn,"SELECT * from message where reciever = '$user'")or die("can't connect ".mysqli_error($conn));
 	$arr = mysqli_fetch_array($db);
 	if(isset($_POST['send'])){
 	$sen = mysqli_real_escape_string($conn,$_POST["sender"]);
 	$msg = mysqli_real_escape_string($conn,$_POST["message"]);
 	$db1 = mysqli_query($conn,"INSERT INTO message(sender , reciever , message) VALUES ('$user','$sen','$msg') ");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
 <h1>Your  Messages</h1>
 <p>
 <?php
  echo "Sent by: ".$arr['sender']."<br>";
  echo "Messages ".$arr['message'];


?>

 </p>
 <p>
 	<form action = 'message.php' method="POST">
 	    <label>Who? </label>
 		<input type="text" name="sender"><br/><br/>
 		 <label>Message </label>
 		<input type="text" name="message"><br/><br/>
 		<input type="submit" name="send" value="send">




 	</form>
 </p>
</body>
</html>