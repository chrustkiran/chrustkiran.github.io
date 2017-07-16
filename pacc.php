<?php 

require('main.php');
include_once('parent.php');

$str ='';
$boo = 0;



if(isset($_POST['reg'])){
	
	$connection = new Connection();
$conn = $connection -> conn();
	session_start();
$name=mysqli_real_escape_string($conn,$_POST['name']);
$p=mysqli_real_escape_string($conn,(string)($_POST['password']));
$id= $_SESSION['id'];
$address = mysqli_real_escape_string($conn,$_POST['address']);
if($p != "" and $name != "" and $address != ""){

mysqli_query($conn , "UPDATE user set name = '$name',  password = '$p' where username ='$id' ");}
elseif($p == "" and $address == ""){
	mysqli_query($conn , "UPDATE user set name = '$name' where username ='$id' ");
}elseif ($name == "" and $address == "") {
	mysqli_query($conn , "UPDATE user set password = '$p' where username ='$id' ");

}
elseif ($name == "" and $p == "") {
	mysqli_query($conn , "UPDATE user set address = '$address' where username ='$id' ");

}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<style type="text/css">
		#frm1{
 //background-image : url("https://www.insbright.com/wp-content/uploads/3205/study-wallpaper-download.jpg");
 //background-size: 1600px 1000px;
font-weight : bold;
color: #2eada4;
font-family : "Comic Sans MS", cursive, sans-serif;


	border-style: solid;
	width: 20%;
	border-radius: 5px;
	margin: 100px 80px;
	width: 400px;
	padding: 90px;
    float: left;
    margin-left: 200px;
    border-color: #2eada4;
}
label {
	float: left;
}
input,select{
float : right;
border-radius: 50px;
background-color:#2eada4;
color:white; 
}
.ch{
	float: right;
	cursor: pointer;
}
#dp{
	width: 1px;
	height: 1px;
	//opacity: 0;
	//overflow: hidden;
	//position: absolute;
	//z-index: -1;

}
.hd,.save{
	text-align: center;
	}
	</style>

</head>
<body>
	<div id="frm1">

		<form action = "sacc.php" method="POST"> 
		<p>
			<h2 class="hd">Update!</h2>
		
			<label>full name:</label>
			<input type="text" name="name" id="name"><br/><br/>
			<label>Password:</label>
			<input type="Password" name="password" id="password"><br/><br/>
			
			<label>Address:</label>
			<input type="text" name="address" id="address"><br/><br/>
			
			<label>Profile Picture:</label>
			<input type="file" name="dp" id="dp">
			
			<input type="submit" name="reg" value="Save" id="reg"><br/>
			<div class="save"><?php echo $str;?></div>
		</form>
		</p>
	</div>

</body>
</html>
<!DOCTYPE html>