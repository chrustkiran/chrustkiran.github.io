<?php
include_once('admin.php');
if(isset($_POST['ok'])){
$club = $_POST['club'];
$str="";
 require_once('main.php');
 $connection = new Connection();
$conn = $connection -> conn();
$clubb = array();
$db1 = mysqli_query($conn , "SELECT * from club");
    while($row = mysqli_fetch_array($db1)){
        $clubb[] = $row['club'];  }
        if(!in_array($club, $clubb)){
        $db = mysqli_query($conn,"INSERT into club (club) values ('$club')");       //inserting in to club
    }
    else{
    	if(strlen($str)==0){
    		echo "Club exist!";
    	}
    }
  
}
   
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="view">
		<?php require_once('main.php');$cl = new Club(); $cl->view(); ?>
		</br>
	</div>
	<div class="add">
	<form action="aclub.php" method="POST">
	<label>Add Club</label>
	<input type="text" name="club">
	<input type="submit" name="ok" value="Add">
	</form>
	</div>
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
