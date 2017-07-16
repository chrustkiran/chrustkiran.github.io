<?php include_once('student.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>
	
	</title>
	<style type="text/css">
		.btom  a{
			text-decoration: none;
			background-color: #2eada4;
			padding: 10px 16px;
			color: white;
			

		}
		#reciever{
			width: 297px;
			border-style: solid;
			
			border-color: #2eada4;
			
			border-bottom-width: 3px;
			border-top-width: 0px;
			border-left-width: 0px;
           
			
			

		}
		h1{
			margin-left: 100px;
		}
		#message{
			width: 300px;
			border-style: solid;
			border-radius:5px;
			border-color: #2eada4;
			border-width: 3px;

			

		}
		#boxx{
		
			
			border-style: solid;
			border-radius:5px;
	        overflow: auto;
			border-color: #2eada4;
			border-width: 3px;
			width: 300px;
			height: 300px;
		}
		/*.btom a:hover {
			background-color: #193763;
		}*/
		#send{
			background-color:  #2eada4;
			border-radius:50px;
			text-decoration:none;
			padding:10px;
			color:white;    
		}
		#send:hover{
			background-color: #195c63;
		}
		#boxx{
             margin-left: 570px;
		}
		#left{
			float: left;
			font-weight : bold;
color: #2eada4;
font-family : "Comic Sans MS", cursive, sans-serif;
		}
		#right{
			float:right;
			font-weight : bold;
color: #2eada4;
font-family : "Comic Sans MS", cursive, sans-serif;
		}
        body{
        	text-align: center;
        }
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript">
		function send(rname,message){
			if(rname == '' || message == ''){
				return;
			}
			var xmlhttp = new XMLHttpRequest();
			
			xmlhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status==200){
					//document.getElementById('box').innerHTML = this.responseText;
				}
			};
			xmlhttp.open('GET','messag.php?rname='+rname+'&message='+message,true);
			xmlhttp.send();
			
		}

		function view(){
		var sen = document.getElementById('reciever').value;
		//document.getElementById('box').innerHTML = sen;
		document.cookie = "sen = "+sen;
		$(document).ready(function(){
			setInterval(function(){$("#box").load('instant.php');},1000);
		});
}

	</script>
</head>
<body>
 <h1>Your  Messages</h1>
<p><div id="boxx">
    
    <select name='reciever' id='reciever' onchange="view()" >
    <option>To whom?</option>
   <?php 
   session_start();
$conn = mysqli_connect("localhost","root","","user") or die($conn);
$db1 = mysqli_query($conn,"SELECT * FROM user");
   while($arr = mysqli_fetch_array($db1)){
                if((substr($arr['username'],-1)=='S' or substr($arr['username'],-1)=='s') and $arr['username']!=$_SESSION['id'] ){
                    echo "<option value=".$arr['username'].">".$arr['username']."</option>";
                }

   }
    
   
   ?>
</select>
 	<div id="box">
 		Please wait...
 	</div>
 </div>
 		 
 		<textarea name = "message" id="message" placeholder="Type Here!"></textarea>
 		<a href="#" onclick="send(reciever.value,message.value)" id="send">send</a>
 		<!--<input type="submit" name="send" value="send" onclick="send(reciever.value,message.value)">

-->


 	
 	
	<p>
	<div class="btom">
	<!-- <a href="return.php"  >Back to main</a></div>-->
 </p>
</body>
</html>