<?php
	session_start();
	$_SESSION['str']="";
	$str = $_SESSION['str'] ;
	require_once('admin.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#frm1{
	font-weight : bold;
    color: #2eada4;
    font-family : "Comic Sans MS", cursive, sans-serif;
	//border-style: solid;
	//width: 20%;
	//border-radius: 5px;
	margin: 100px 80px;
	width: 400px;
	
    float: left;
    margin-left: 220px;
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
input{
	padding:10px;
	text-align: center;
}
.ch{
	float: right;
	cursor: pointer;
}
/*#dp{
	width: 1px;
	height: 1px;
	//opacity: 0;
	//overflow: hidden;
	//position: absolute;
	//z-index: -1;

}*/
.hd,.save{
	text-align: center;
	}
	table{
		//margin-left: 50px;
	}
	table,th,td input{
		width: 70px;
		height: 10px;
	}
    table,td,th{
       // border-style: solid;
        //padding: 30%;
    }
    #btn{
    	margin-left: 290px;
    	border-radius: 50px;
    	background-color: #2eada4;
    	color:white;
    }
   #tp{
   	margin-left: 150px;
   	text-align: center;
   }

	</style>
	<script type="text/javascript">
		function time(){

			var classde = document.getElementById('class').value;
			
			if(classde=="Choose"){
				document.getElementById('timeta').innerHTML = "Please choose a class";
			}
			else{
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					document.getElementById('timeta').innerHTML = this.responseText;
				}
			}
			xmlhttp.open('GET','atimeins.php?class='+classde,true);
			xmlhttp.send();


		}}

	</script>
</head>
<body>
<form id="frm1" action="atimepro.php" method="POST">
<div id="tp">
    <h2 class="hd">Time Table</h2>
	<label>Class:</label>
			<?php 
			$conn = mysqli_connect("localhost","root","","user") or die($conn);
			$c = mysqli_query($conn,"SELECT * from timetable");
			echo "<select name=class onchange=time() id=class>";
			echo "<option> Choose </option>";
				while($a = mysqli_fetch_array($c)){
					
				echo "<option value=".$a['class'].'>'.$a['class'].'</option>';
			
			}
			echo "</select><br/><br/>";
			?>
			</div>
			<div id="timeta">
				Timetable will be shown as soon as you select the class
		   </div>
		   <div>
		   		<?php echo $str;?>
		   </div>
</form>
</body>
</html>