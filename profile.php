<!DOCTYPE html>
<html lang="EN"><head>
	<title>Make Blog!!!</title>
</head>
<h1> Welcome to my place on the web </h1>
<body>
<?php

	$verify = verifyUser($_GET['userID']);
	if(!$verify)
	{

    //user does not exist or you dont have permission to view their profile

    //navigate away from profile.php

    $_SESSION['errorMsg'] = "Either you do not have permission to access this profile or this profile does not exist";
	header("location: error.php"); // where you can display the error message

    exit(); //stop the rest of your page from executing

	}
 
?>

</body>
</html>