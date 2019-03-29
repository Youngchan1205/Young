<!DOCTYPE html>
<html lang="EN"><head>
	<title>welcome</title>
	<link rel="stylesheet" type="text/css" href="loginDB.css" />
</head>
<body>
<?php
$error = '';
$username=$_POST['uname']; 
$password=$_POST['mypass']; 
if(isset($_POST['submit'])){
	if(empty($username) || empty($password)){		
		echo '<script type="text/javascript">alert("check your ID or Password");</script>';
		echo '<a href="login.html"> go back to login page</a>';

	}
	else
	{
		$conn = mysqli_connect("studentdb-maria.gl.umbc.edu", "han20", "han20", "han20");
		$db = mysqli_select_db($conn, "guestbook1");
		$query = mysqli_query($conn, "SELECT * FROM guestbook1 WHERE userID='$username'
									AND userpw = '$password'");
		$row = mysqli_num_rows($query);
		if($row == 1){
			header("Location: main_myrecipes.html");
		}
		else
		{
			echo '<script type="text/javascript">alert("check your ID or Password");</script>';
			echo '<a href="login.html"> go back to login page</a>';
		}	
		mysqli_close($conn);
	}
}
?>
</body>
</html>