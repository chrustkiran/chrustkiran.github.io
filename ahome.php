<?php session_start();
include_once('admin.php');
if(isset($_SESSION['id'])){
	?><!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="theme/themee/css/freelancer.css">
<head>

<style type="text/css">
	p{
		text-align: center;
		margin-top: 20%;
	}
</style>

	<title></title>
</head>
<body>
<p style="color:#195c63; font-family:Comic Sans MS, cursive, sans-serif;"> You are logged in as Admin username is <b style="color:#2eada4;"> <?php  echo $_SESSION['id']; ?></b></p>
<div id= "noti">

</div>
</body>
</html>
<?php 
}
 else{header("Location:index.php");}

?>
