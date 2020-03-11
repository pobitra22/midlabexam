<?php
	session_start();
	?>
	<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>login Page <?php if(isset($_SESSION['pass']))?> </h1>


	<form method="POST" action="log.php">
	<form>
	<fieldset>
		<legend>Login</legend>
	<table>
	   <tr>
			<td>User ID: </td></tr>
			</tr>
			<td><input type="text" name="" value=""/></td>
		</tr>
		<tr>
			<td>Password:</td></tr>
			<tr>
			<td> <input type="number" name="" value=""/></td>
		</tr>
		<tr>
		<td><hr></td>
		</tr>
		<tr>
			<td>
				<input type="button" name="" value="login">
				<a href="registration.php">Register</a>
			</td>
		</tr>
	</table>
	</fieldset>
	</form>
</body>
</html>