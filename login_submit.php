<!DOCTYPE html>
<html lang="EN">
<head>
	<title>Insert values into Guestbook</title>
	<link rel="stylesheet" type="text/css" href="signin.css" />
</head>
<body>
<div class = "LogBar">
  <p>
	<?php
		$phoneNumber = $_POST["dayTimeNumber"];		
		if(preg_match("/\d{3}-\d{3}-\d{4}/", $phoneNumber)){
			echo 'congraturation! you are all set to use our website! thank you so much please click here and sign in again.
			<a href="https://swe.umbc.edu/~han20/is448/HTML_CSS%20_My%20Recipe_/login.html"> click here to log in page</a>';	
		}
		else{
			echo "<span class=\"submitBar\">please check your ID and phone number, and go back to previous page and use  (ex:000-000-0000) format</span>" ;
			echo "<br>";
			print '<a href="https://swe.umbc.edu/~han20/is448/HTML_CSS%20_My%20Recipe_/signin.html"> <span class=\"error\">click here priview screen</span></a>';
		}
	?>
	
	</p>
</div>
<?php
	$db = mysqli_connect("studentdb-maria.gl.umbc.edu", "han20", "han20", "han20");
	
	if(mysqli_connect_errno())
		exit("Error - could not connect to MySQl");
	
	$userIDs = $_POST['custID'];
	$userpws = $_POST['pw'];
	$userNames = $_POST['custName'];
	$userphones = $_POST['dayTimeNumber'];
	$userEmails = $_POST['emailaddress'];
?>

 
 <?php
 $constructed_query = "INSERT INTO guestbook1 (userID, userpw, username,phone,email) values ('$userIDs', '$userpws', '$userNames','$userphones','$userEmails')";
 if (empty($_POST['custID'])) {
    }
else{
 $result = mysqli_query($db, $constructed_query);
}
 ?>
 
 
 
</body>
</html>