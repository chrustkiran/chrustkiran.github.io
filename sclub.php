<?php
session_start();
include_once('student.php');
$id = $_SESSION['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#out{
			text-align: center;
		}
	</style>
</head>
<body>
	<div id="out">

		<?php

 			require_once('main.php');
 			$connection = new Connection();
			$conn = $connection -> conn();
			$db1 = mysqli_query($conn , "SELECT * from user where username = '$id'");
			$clu = mysqli_fetch_array($db1)['club'];
			$db = mysqli_query($conn , "SELECT * from club");
			while($row = mysqli_fetch_array($db)){
				if($row['club'] == $clu){
				echo "<h1>".$row['club']."(Yours)</h1>";
			}
			else{
				echo "<h1>".$row['club']."</h1>";
			}
				echo "<p>".$row['info']."</p>";
			}
			
		?>
		
	</div>

</body>
</html>