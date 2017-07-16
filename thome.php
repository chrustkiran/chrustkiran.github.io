<?php session_start();
include_once('teacher.php');
if(isset($_SESSION['id'])){
	?><!DOCTYPE html>
<html>
<head>
<style type="text/css">
	#noti p{
		text-align: center;
		border-style:solid;
     	border-width: 2px;
     	width: 500px;
     	margin-left: 500px;
     	font-family: "Comic Sans MS", cursive, sans-serif;
	}
	#noti div{
		float: right;
	}
	#noti{
     	color:red;
     }
  p{
  	text-align: center;
  	font-family: "Comic Sans MS", cursive, sans-serif;
  }
  p a{
  	text-decoration: none;
  }
</style>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
	
	/*$(document).ready(function() {
		setInterval(function(){
				$('#noti').load('snoti.php');
			},1000);	
	});*/
	$(document).ready(function(){
			setInterval(function(){$("#noti").load('tnoti.php');},1000);
		});
	
	
</script>
</head>
<body>
<p> You are logged in as Teacher username is <?php  echo $_SESSION['id']; ?></p>

<div id = "noti" style="text-align: center;">
	Loading...
</div>
</body>
</html>
<?php 
}
 else{header("Location:index.php");}

?>