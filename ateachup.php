
<?php
require_once('main.php');

 $connection = new Connection();
$conn = $connection -> conn();
include_once('admin.php');
if(isset($_POST['Change'])){
$em='';	
$cla = $_POST['class'];
$teach = $_POST['teacher'];
$db4 = mysqli_query($conn , "SELECT * from timetable where teacher='$teach'");
$cll = mysqli_fetch_array($db4)['class'];
$db5 = mysqli_query($conn , "SELECT * from timetable where class = '$cla'");
$t = mysqli_fetch_array($db5)['teacher'];
echo $t;
				$db3 = mysqli_query($conn , "SELECT * from user where class='$cla'");
    while($row = mysqli_fetch_array($db3)){
    	if(substr($row['username'], -1) == "T"){
    				$te = $row['username'];
    	}}
//echo $cla;
$str="";


 //$db2 = mysqli_query($conn , "SELECT * from user where username = '$teach'  ");
if(isset($t)){
  mysqli_query($conn , "UPDATE user SET class = '$em' where username = '$t' ") ;}
  if(isset($cl)){

 mysqli_query($conn , "UPDATE timetable SET teacher = '$em' where class = '$cll'   ");

}
 mysqli_query($conn , "UPDATE user SET class = '$cla' where username = '$teach'") ;
 mysqli_query($conn , "UPDATE timetable SET class = '$cla' where teacher = '$teach'");
 
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
			$db1 = mysqli_query($conn , "SELECT * from user");
    while($row = mysqli_fetch_array($db1)){
    	if(substr($row['username'], -1) == "T"){
        	echo $row['username']." - ".$row['class']. "</br>";
          }
    }
		 ?>
		</br>
	</div>
	<div class="add">
	<form action="ateachup.php" method="POST">
	
	<label>Teacher :</label>
	<select name="teacher">
	<?php
				$db1 = mysqli_query($conn , "SELECT * from user");
    while($row = mysqli_fetch_array($db1)){
    	if(substr($row['username'], -1) == "T"){
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
			
			}
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