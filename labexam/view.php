<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Users</title>
</head>

<body>
	<table border="1" width:"50%">
	<tr>
	<td colspan="5"><center>Users</td>
	</tr>
	<tr>
	<td>ID</td>
	<td>Name</td>
	<td>User Type</td>
	</tr>
	<tr>
	<td>15-10101-1</td>
	<td>Bob</td>
	<td>Admin</td>
	</tr>
	<tr>
	<td>16-10102-2</td>
	<td>Anne</td>
	<td>User</td>
	</tr>
	<tr>
	<td>16-10103-2</td>
	<td>Kern</td>
	<td>User</td>
	</tr>
	<tr>
	<td>16-10104-2</td>
	<td>James</td>
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