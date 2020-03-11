<?php	
	session_start();
	if(!isset($_SESSION['uname'])){  
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	
			<center><h1>
			Welcome Bob!</h1><br/></center>
			<center>
			<a href="view.php">Profile</a><br/>
			<a href="Change password.php">Change Password</a><br/>
			<a href="user.php">View User</a><br/>
			<a href="login.php">Logout</a>
	    </center>
	
	</table>
</body>
</html>