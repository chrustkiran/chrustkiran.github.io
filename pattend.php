<?php 
 include_once('parent.php');
include_once('main.php');
session_start();
 $connection = new Connection();
 $conn = $connection -> conn();
 $id1 = $_SESSION['id'];
 $id = substr($id1, 0,-1)."S";
 $db = mysqli_query($conn , "SELECT * from user where username = '$id'");
 $cl = mysqli_fetch_array($db)['class'];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function show() {
			var cl = document.getElementById('class').value;
			var date1 = document.getElementById('date1').value;
			var xml = new XMLHttpRequest();
			xml.onreadystatechange = function(){
				if(this.readyState = 4 && this.status == 200){
					document.getElementById('box').innerHTML = this.responseText;
				}
			}
			xml.open('GET','pattendins.php?date1='+date1+"&class="+cl,true);
			xml.send();
		}
	</script>
	<style type="text/css">
		.main{
    margin-top: 15px;
    margin-left: 400px;
    border-style: solid;
    border-width: 2px;
    padding: 70px;
    width: 500px;
    text-align: center;
    border-color: #2eada4;
   font-family: "Comic Sans MS", cursive, sans-serif;
   border-radius: 15px;
   color : #2eada4;

  }
select{
  border-style: solid;
  border-width: 2px;
  text-align: center;
  border-color: #2eada4;
  font-family: "Comic Sans MS", cursive, sans-serif;
  border-radius: 15px;
  color : #2eada4;

}
p,input{
  font-family: "Comic Sans MS", cursive, sans-serif;
  border-color: #2eada4;
}
	</style>
</head>
<body> 
<form action="sattend.php" method="POST">
<div class="main">
	<label>Pick a Month : </label>
	<select id="date1">
		<?php
			for ($i=1; $i <13 ; $i++) { 
				if(strlen($i)==1){
				echo "<option value=0".$i.">0".$i."</option>";
			}
			else{
				echo "<option value=".$i.">".$i."</option>";
			}
			}
			
		?>
	</select>
	<a href="#" onclick="show()">show</a>
	<input type="hidden" name="class" id="class" value=<?php echo $cl; ?>>
	<div id="box"></div>
	
</div>
</form>
</body>
</html>