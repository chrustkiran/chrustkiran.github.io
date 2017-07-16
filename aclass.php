<?php
include_once('admin.php');
if(isset($_POST['ok'])){
$class = $_POST['classs'];
require_once('main.php');
$cl = new Classes();
$cl->create($class , "","");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="view">
		<?php require_once('main.php');$cl = new Classes(); $cl->view(); ?>
		</br>
	</div>
	<div class="add">
	<form action="aclass.php" method="POST">
	<label>Add Class</label>
	<input type="text" name="classs">
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