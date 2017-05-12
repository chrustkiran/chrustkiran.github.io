	<?php
 	$conn = mysqli_connect("sql9.freesqldatabase.com","sql9173811","hsR16bldP1","sql9173811") or die($conn);
 	$db = mysqli_query($conn,"SELECT * FROM message where reciever = $_SESSION['user']");
 	$arr = mysqli_fetch_array($db);

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
  echo $arr['reciever']."<br>";
  echo $arr['message'];


 </p>

</body>
</html>