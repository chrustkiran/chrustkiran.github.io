<?php

include_once('admin.php');
$str="";
if(isset($_POST['save'])){
	require_once('main.php');
    $connection = new Connection();
    $conn = $connection -> conn();
    $about = $_POST['info'];

  
    	 $db = mysqli_query($conn,"INSERT into about (about) value ('$about')");
   
   
    if($db){
    	$str= "Saved Successfully";
    }
    else{
    	$str = "It went wrong!";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.out{
			text-align: center;
			margin-left: 250px;
			color:#2eada4;
			font-family:Comic Sans MS, cursive, sans-serif;
			margin-top: 250px;
		}
		p{
			color:#2eada4;
			font-family:Comic Sans MS, cursive, sans-serif;
		}
		button,textarea{
			border-radius: 50px;
			background-color:#2eada4;
		}
	</style>
</head>
<body>
<div class = "out">
<form action="aschool.php" method="POST">
	<h1>T/ Kaileshwara College</h1>
	<textarea name= 'info'></textarea>
	<button name="save">Save </button>
	<p><?php echo $str; ?></p>
</form>
</div>
</body>
</html>