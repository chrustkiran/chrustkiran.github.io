<?php
	session_start();
 	$conn = mysqli_connect("sql9.freesqldatabase.com","sql9173811","hsR16bldP1","sql9173811") or die($conn);
 	$user = mysqli_real_escape_string($conn,$_SESSION['user']);
 	$db = mysqli_query($conn,"SELECT * from message where reciever = '$user'")or die("can't connect ".mysqli_error($conn));
 	
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
	<script type="text/javascript">
		function check(){
			var sender = document.getElementById("sender");
			var message = document.getElementById("message");
			var reciever = $_SESSION['user'];

		}
		$.ajax({
  type: 'post',
  url: 'message.php',
  data: {
  	sender:sender,
  	message:message,
  	reciever:reciever,
   
  },
  success: function (response) {
   $('#success__para').html("You data will be saved");
  }
 });
	
 return false;
}

	</script>
</head>
<body>
 <h1>Your  Messages</h1>
 <p>
 <?php
	 while($arr = mysqli_fetch_array($db)){
  echo "Sent by: ".$arr['sender']."<br>";
  echo "Messages ".$arr['message']."<br/><br/>";
	 }
?>

 </p>
 <p>
 	<form action = 'message.php' method="POST" name="form1">
 	    <label>Who? </label>
 		<input type="text" name="sender" id="sender"><br/><br/>
 		 <label>Message </label>
 		<textarea name = "message" id="message"></textarea><br/><br/>
 		<input type="submit" name="send" value="send" onclick="check()">




 	</form>
	<p>
	 <a href="return.php" >Back to main</a>
 </p>
</body>
</html>