<?php

include_once('parent.php');


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
	<p>
		<?php
			require_once('main.php');
 			$connection = new Connection();
			$conn = $connection -> conn();
			$db1 = mysqli_query($conn , "SELECT * from about ");
			$clu = mysqli_fetch_array($db1)['about'];
			echo $clu;
		?>
	</p>
</form>
</div>
</body>
</html>