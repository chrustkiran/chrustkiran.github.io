<?php

include_once('admin.php'); 			
require_once('main.php');
$connection = new Connection();
$conn = $connection -> conn();
if(isset($_POST['save'])){
	$db1 = mysqli_query($conn , "SELECT * from club");
			while($row = mysqli_fetch_array($db1)){
				$info = $_POST[$row['club']];
				mysqli_query($conn , "UPDATE club set info='$info' where club = '$row[club]' ");
			}
	
}

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
    <form action="aclubup.php" method="POST">
		<?php


			$db = mysqli_query($conn , "SELECT * from club");
			while($row = mysqli_fetch_array($db)){
				echo "<h1>".$row['club']."</h1>";
				echo "<textarea name=".$row['club']."></textarea>";
			}
		?>
		<p>
	<input type="submit" name="save" value="save">
	</p>
	</div>
    </form>
</body>
</html>