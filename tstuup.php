<?php  
include_once('teacher.php');


require_once('main.php');
session_start();
 $connection = new Connection();
$conn = $connection -> conn();
$id = $_SESSION['id'];
$db = mysqli_query($conn,"SELECT * FROM user where username='$id'");
$arr = mysqli_fetch_array($db);
$c11 = $arr['class'];
if(isset($_POST['Change'])){

$cla = $_POST['class'];
$student = $_POST['student'];
//$db4 = mysqli_query($conn , "SELECT * from timetable where teacher='$teach'");

//$db5 = mysqli_query($conn , "SELECT * from timetable where class = '$cla'");
//$t = mysqli_fetch_array($db5)['teacher'];
//echo $t;
$str="";
if($cla != "pass"){

 mysqli_query($conn , "UPDATE user SET class = '$cla' where username = '$student'") ;
}
else{
	 mysqli_query($conn , "UPDATE user SET exist = 0 where username = '$student'") ;
}

  } 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		


		
	</style>
</head>
<body>
<div id="out">
	<div class="view">
		<?php 
			$db1 = mysqli_query($conn , "SELECT * from user where class = '$c11'");
    while($row = mysqli_fetch_array($db1)){
    	if(substr($row['username'], -1) == "S"){
        	echo $row['username']." - ".$row['class']. "</br>";
          }
    }
		 ?>
		</br>
	</div>
	<div class="add">
	<form action="tstuup.php" method="POST">
	
	<label>Teacher :</label>
	<select name="student">
	<?php
				$db1 = mysqli_query($conn , "SELECT * from user where class = '$c11'");
    while($row = mysqli_fetch_array($db1)){
    	if(substr($row['username'], -1) == "S"){
        	echo "<option value=".$row['username'].">". $row['username']. "</option>";
          }
    }
?>
		
	</select>
    <label>Class :</label>
<?php 
			

			$c = mysqli_query($conn,"SELECT * from timetable");
			echo "<select name=class>";
				while($a = mysqli_fetch_array($c)){
					
				echo "<option value=".$a['class'].'>'.$a['class'].'</option>';
			
			}echo "<option value=pass>pass out</option>";
			echo "</select><br/><br/>";
			?>
			
	<input type="submit" name="Change" value="Change">
	</form>
	</div></div>
</body>
</html>
<style type="text/css">
	body{
		text-align: center;

	}
	.view{
		
		margin-top: 200px;
	}
</style>

