<?php 

require('main.php');
include_once('admin.php');

$str ='';
$boo = 0;



if(isset($_POST['reg'])){
	
	$connection = new Connection();
$conn = $connection -> conn();

$u=mysqli_real_escape_string($conn,$_POST['username']);
$cla=mysqli_real_escape_string($conn,$_POST['class']);
$clu=mysqli_real_escape_string($conn,$_POST['club']);
$p=mysqli_real_escape_string($conn,(string)($_POST['password'])); 

$re = mysqli_query($conn,"SELECT * from user");
while($rowq = mysqli_fetch_array($re)){
	if($rowq['username'] == $u){                //usrname already exists
		$boo = 0;
		break;
	}
	else{
		$boo = 1;
	}
}
if((substr($u, -1)=="S" or substr($u, -1)=="s"  ) and $boo==1 ){
  
  $e="INSERT INTO user (username,password,class,club,exist) VALUES ('$u','$p','$cla','$clu',1)"; 
  $par = substr($u,0,-1 )."P";
  $result = mysqli_query($conn,$e);
 // mysqli_query($conn,"UPDATE timetable set teacher='$u' where class='$cla'");
  mysqli_query($conn,"INSERT INTO user (username,password,class,club,exist) VALUES ('$par','$p','$cla','$clu',1)" );
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
	$str = "Sorry Try Again!";
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

		<form action = "astudent.php" method="POST"> 
		<p>
			<h2 class="hd">Student</h2>
			<label>User name:</label>
			<input type="text" name="username" id="user"><br/><br/>
			<label>Password:</label>
			<input type="Password" name="password" id="password"><br/><br/>
			<label>Class:</label>
			<?php 
			
             $connection = new Connection();
$conn = $connection -> conn();
			$c = mysqli_query($conn,"SELECT * from timetable");
			echo "<select name=class>";
				while($a = mysqli_fetch_array($c)){
					
				echo "<option value=".$a['class'].'>'.$a['class'].'</option>';
			
			}
			echo "</select><br/><br/>";
			?>
			
			<label>Club:</label>
			<!--<input type="text" name="club" id="club"><br/><br/>-->
				<?php 
			
 
			$c = mysqli_query($conn,"SELECT * from club");
			echo "<select name=club>";
				while($a = mysqli_fetch_array($c)){
					
				echo "<option value=".$a['club'].'>'.$a['club'].'</option>';
			
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
