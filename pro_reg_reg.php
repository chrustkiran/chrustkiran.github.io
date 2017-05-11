<?php

$con = mysqli_connect("localhost","id1577001_userss","kiran123","id1577001_users") or die($con);

//$i=intval(mysqli_real_escape_string($con,$_POST['id']));
$u=mysqli_real_escape_string($con,$_POST['username']);
$p=mysqli_real_escape_string($con,(string)($_POST['password']));
$e="INSERT INTO user (username,password) VALUES ('$u','$p')";
$result = mysqli_query($con,$e);

if($result and ($u[-1]=="p" or $u[-1]=="P" or $u[-1]=="s" or $u[-1]=="S" or $u[-1]=="A" or $u[-1]=="a" or $u[-1]=="T" or $u[-1]=="t"  ) ){
  session_start();
  $_SESSION['userr'] = $u;
  $_SESSION['passs'] = $p;
  require('process.php');
}
else{
echo "Sorry try again";
}
 ?>