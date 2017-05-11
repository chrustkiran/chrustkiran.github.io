<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="frm">
	
		<form action="process.php" method="POST">
		
			<p>
				<label> Username:  </label>
				<input type="text" id="user" name="user"/>
				<input type="hidden" id="user" name="user1" value="hello" />
			</p>
			<p>
				<label>Password:&nbsp</label>
				<input type="Password" id="pass" name="pass"/>
				<input type="hidden" id="user" name="pass1" value="hello" />
			</p>
			<p>
				<input type="submit" name = "login" id="btn" value="Login">
		</form>
			    <form action="process_reg.php" method="POST">
					<input type="submit" " value="Register" id="btn1">
				</form>
			
			</p>
		
	</div>


</body>
</html>