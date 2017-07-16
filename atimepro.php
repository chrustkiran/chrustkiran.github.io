<?php

$timearray = array();
if(isset($_POST['save'])){
	$conn = mysqli_connect("localhost","root","","user") or die($conn);
	for($x=0 ; $x<8 ;$x++){
		for($r=0;$r<5;$r++){
			//echo $_POST[$x.$r];
			$timearray[$x][]=$_POST[$x.$r];
		}
	}
	$timea = serialize($timearray);
	$cl = mysqli_real_escape_string($conn,$_POST['class']);
	$db = mysqli_query($conn , "UPDATE timetable set timetable = '$timea' where class = '$cl'");

	header("Location:atimetable.php");
}


?>
