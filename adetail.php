<?php
include_once('admin.php');
require_once('main.php');
 $connection = new Connection();
$conn = $connection -> conn();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#out{
			margin-left: 300px;
			text-align: center;
		}
	</style>
</head>
<body>
<div id="out">
  	<h1>Registered Students</h1>
  	<p>
  		<?php
  		$co = 1;
  			$db3 = mysqli_query($conn , "SELECT * from user ");
    while($row = mysqli_fetch_array($db3)){
    	if(substr($row['username'], -1) == "S"){
    				echo $co.")".$row['username']."</br>";
    				$co++;
    	}}
  		?>
  	</p>
  	<h1>Registered Teachers</h1>
  	<p>
  		<?php
  		$co = 1;
  			$db3 = mysqli_query($conn , "SELECT * from user ");
    while($row = mysqli_fetch_array($db3)){
    	if(substr($row['username'], -1) == "T"){
    				echo $co.")".$row['username']."</br>";
    				$co++;
    	}}
  		?>
  	</p>
  	</div>
</body>
</html>