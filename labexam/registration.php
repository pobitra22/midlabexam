<?
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	
	<form>
	<fieldset>
		<legend>Registration</legend>
	<table>
	    <tr>
			<td>ID: </td></tr>
			<tr><td><input type="number" name="" value=""/></td>
		</tr>
		<tr>
			<td>Password:</td></tr>
			<tr>
			<td> <input type="text" name="" value=""/></td>
		</tr>
		<tr>
			<td>confirm Password:</td></tr>
			<tr>
			<td> <input type="text" name="" value=""/></td>
		</tr>
		<tr>
			<td>name:</td></tr>
			<tr>
			<td><input type="text" name="" value="" size="5" /></td>
		</tr>
		<tr>
			<td>User Type: </td></tr>
			</tr>
			<td> 
				<input type="radio" name="User_Type" value="">User
				<input type="radio" name="User_Type" value="">Admin
			</td>
		</tr>
		<tr>
		<td><hr></td>
		</tr>
		<tr>
			
			<td>
				<input type="button" name="" value="Sign_Up">
				<a href="login.php">Sign_In</a>
			</td>
		</tr>
	</table>
	</fieldset>
	</form>
</body>
</html>