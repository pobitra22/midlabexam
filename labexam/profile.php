<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<table border="1">
	<tr>
	<td colspan="5"><center>Profile</td>
	<td></td>
	</tr>
	<tr>
	<td>ID<td>
	<td>16-10101-2</td>
	</tr>
	<tr>
	<td>name<td>
	<td>Bob</td>
	</tr>
	<tr>
	<td>User Type <td>
	<td>Admin</td>
	</tr>
	<tr>
			<td>
				<a href="welcome.php">Go Home</a>
			</td>
		</tr>
	
	
	</table>
</body>
</html>