<?php


 $date = $_POST['date'];
 $class = $_POST['class'];

 $conn = mysqli_connect("localhost","root","","user") or die($conn);
 $db = mysqli_query($conn,"SELECT * FROM user where class='$class'");
 $attend = array();
 while($array = mysqli_fetch_array($db)){
 	if(substr($array['username'], -1)=='S'){
 		if(isset($_POST[$array['username']]) != ""){
 	$attend[$array['username']] = $_POST[$array['username']];
 } 
else{
	$attend[$array['username']] = "0";
}}
}
$att = serialize($attend);
$db = mysqli_query($conn,"SELECT * FROM attendance where class='$class' and datee ='$date'");
 
 if(mysqli_num_rows($db)>0){
 	mysqli_query($conn,"UPDATE  attendance SET attend  ='$att' where (datee = '$date' and class = '$class') ");
 }
 else{
mysqli_query($conn,"INSERT into attendance (datee , class , attend) values ('$date' , '$class' , '$att') ");
}
header("Location:tattend.php");
?>