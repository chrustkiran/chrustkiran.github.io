<?php 
include_once('main.php');
session_start();
 $connection = new Connection();
 $conn = $connection -> conn();


 $date1 = $_REQUEST['date1'];
 $cl = $_REQUEST['class'];
 
 $year = date('Y');
 for ($i=01; $i < cal_days_in_month(CAL_GREGORIAN, $date1, $year)+1;  $i++) { 
 	# code..
 	if(strlen($i)==1){
  $datee = $year."-".$date1."-0".$i;
 
}
else{
	$datee = $year."-".$date1."-".$i;
	
}
 $db1 = mysqli_query($conn,"SELECT * from attendance where class = '$cl' and datee = '$datee'");

if(mysqli_num_rows($db1) == 1){
 ($row = mysqli_fetch_array($db1));
 	foreach(unserialize($row['attend']) as $key => $value){
 		if($key == $_SESSION['id']){
 			echo $datee."-    ".$value."</br>";
 		
 	}
 }
}
else{
	echo $datee."-0</br>";
}}


?>
