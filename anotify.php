<?php
include_once('admin.php');


 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		
	</script>
	<style type="text/css">
		select{
			margin-left: 50px;
			margin-top: 10px;
			border-radius: 5px;
			background-color:#2eada4;
			color:white; 
			  }
			 textarea{
			  	border-radius: 2px;
			background-color:#2eada4;
			color:white; 
			
			  }
			  button{
			  	border-radius: 25px;
			background-color:#2eada4;
			color:white; 
			  }
			 form{
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
			 .cl:hover{
			 	color: black;
			 }

	</style>
</head>
<body>
<form method="POST" action="anotipro.php">
  
   <select name="choose[]" id="choose" multiple="multiple">
   		<option value="alls" onclick="view1()">
   			All student
   		</option>
   		<option value="allt" onclick="view1()">All teacher</option>
   		<option value="allp"> All Parents</option>
   		<option value="ev" onclick="view1()">Everyone</option>
   		
   		</option>
   		<optgroup label="Class"> 
   	
   
   
   
  
 <?php 
			require('main.php');
		$connection = new Connection();
		$conn = $connection -> conn();
			$c = mysqli_query($conn,"SELECT * from timetable");
			
				while($a = mysqli_fetch_array($c)){
					
				echo "<option value=".$a['class'].'>'.$a['class'].'</option>';
			
			}
			
			?>
				
			</optgroup>
     </select>
   <textarea name=notification></textarea>
   <button name="post">Post</button>

 <div> </br> &nbsp &nbsp Holt ctr and select for multiple selection :) </div>
</form> 
</body>
</html>