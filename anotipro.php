<?php 
include_once('main.php');
$connection = new Connection();
$conn = $connection -> conn();
$choosepost = array();
date_default_timezone_set("Asia/Colombo");
$time  = date("d-m-Y h:i");
$message = $_POST['notification'];
if($message != ""){
foreach ($_POST['choose'] as $value) {
	$choosepost[] = $value;
	echo $value;
	$db = mysqli_query($conn , "INSERT into notify (reciever , message , date_ ) values ('$value','$message','$time')" );
}
}
//header("Location:anotify.php");
?>