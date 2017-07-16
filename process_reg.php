<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style_reg.css">
</head>
<script type="text/javascript">
	function check(){

		var pw2 = document.getElementById('password2').value;
		var pw1 = document.getElementById('password').value;
		//window.alert(pw2 + pw1);
		if(pw2 != pw1 ){
			document.getElementById('out').innerHTML = "Password not match!";		
		}
		else{
			document.getElementById('out').innerHTML = "Ok now you can submint :)"
			
		}
	}
</script>
<body>
	<div id="frm1">
		<form action = "pro_reg_reg.php" method="POST"> 
		<p>
			
			<label>User name:</label>
			<input type="text" name="username" id="user"><br/><br/>
			<label>Password:</label>
			<input type="Password" name="password" id="password"><br/><br/>
			<label>Password Again:</label>
			<input type="Password" name="password2" id="password2" onkeyup="check()"><br/><br/>
	        <input type="submit" name="save" value="save" id="save">

		</form>
		</p>
		<div id="out"></div>
	</div>

</body>
<img src="title.png">
</html>
<!DOCTYPE html>