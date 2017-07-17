<?php 
require('main.php');
		$connection = new Connection();
		$conn = $connection -> conn();
$str ='';
$boo = 0;
include_once('admin.php');
if(isset($_POST['reg'])){
//$conn = mysqli_connect("localhost","root","","user") or die($conn);
$u=mysqli_real_escape_string($conn,$_POST['username']);
$cla=mysqli_real_escape_string($conn,$_POST['class']);
//$clu=mysqli_real_escape_string($conn,$_POST['club']);
$p=mysqli_real_escape_string($conn,(string)($_POST['password']));
$re = mysqli_query($conn,"SELECT * from user");
while($rowq = mysqli_fetch_array($re)){
	if($rowq['username'] == $u){
		$boo = 0;
		break;
	}
	else{
		$boo = 1;               //user available
	}
}

if((substr($u, -1)=="T" or substr($u, -1)=="t"  ) and $boo == 1 ){
 
  $e="INSERT INTO user (username,password,class) VALUES ('$u','$p','$cla')"; 
  $result = mysqli_query($conn,$e);
  mysqli_query($conn,"UPDATE timetable set teacher='$u' where class='$cla'");
  session_start();
  $str = "Successfully saved ".$u;
  //$_SESSION['userr'] = $u;
  //$_SESSION['passs'] = $p;
 // require('process.php');
}
elseif($boo == 0){
	$str = "User Already Exists!";
}
else{
	$str = "Sorry try again";

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

		<form action = "ateacher.php" method="POST"> 
		<p>
			<h2 class="hd">Teacher</h2>
			<label>User name:</label>
			<input type="text" name="username" id="user"><br/><br/>
			<label>Password:</label>
			<input type="Password" name="password" id="password"><br/><br/>
			<label>Class:</label>
			<?php 
			//$conn = mysqli_connect("localhost","root","","user") or die($conn);
			$c = mysqli_query($conn,"SELECT * from timetable");
			echo "<select name=class>";
				while($a = mysqli_fetch_array($c)){
					if($a['teacher']==""){
				echo "<option value=".$a['class'].'>'.$a['class'].'</option>';
			}
			}
			echo "</select><br/><br/>";
			?>
			
			
	
			<input type="submit" name="reg" value="Register" id="reg"><br/>
			<div class="save"><?php echo $str;?></div>
		</form>
		</p>
	</div>

</body>
</html>
<!DOCTYPE html>
