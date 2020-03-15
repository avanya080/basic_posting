<html>
<head>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>


</head>
<body>
			<?php 'conn.php' ?>
		<br>
		<h2>Login here</h2>
		<form action="login.php" method="post">
			<label>Username:</label>
		<input type="text" name="uname" placeholder="User name"><br><br>
			<label>Password:</label>
			
	 <input type="password" name="pass" placeholder="Password"><br><br>

			<button  type="submit"><b>Login</b></button>
			</form>
		<h2>Signup here</h2>
			<form action="signup.php" method="post">
			<label>Username:</label>
		<input type="text" name="name" placeholder="User name"><br><br>
			<label>Password:</label>
	 <input type="password" name="pass" placeholder="Password"><br><br>
			<button type="submit"><b>Signup</b></button>
			</form>
</body>
</html>