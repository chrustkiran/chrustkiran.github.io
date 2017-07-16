<?php

$conn = mysqli_connect("localhost","root","","user") or die($conn);

//$i=intval(mysqli_real_escape_string($con,$_POST['id']));
$u=mysqli_real_escape_string($conn,$_POST['username']);
$p=mysqli_real_escape_string($conn,(string)($_POST['password']));
$p2=mysqli_real_escape_string($conn,(string)($_POST['password2']));
//$e="INSERT INTO user (username,password,class,club) VALUES ('$u','$p','$cla','$clu')";

$e = "UPDATE user SET password='$p' where username='$u'";
$d = mysqli_query($conn , "SELECT * from user where username = '$u'");

$result = mysqli_query($conn,$e);
if($result and mysqli_num_rows($d) >0){
	$_SESSION['userr'] = $u;
	$_SESSION['passs'] = $p;
	require('process.php');

}
else{
	

	?> 
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<script type="text/javascript">
			window.alert("User does not exist!");
		</script>
	</head>
	<body>
	
	</body>
	</html> <?php

require_once('index.php');
//header("Location:index.php");
}

 ?>
 