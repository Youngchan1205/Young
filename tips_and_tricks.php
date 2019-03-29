<!DOCTYPE html>
<html lang="EN"><head>
	<title>Tips and Tricks</title>
	<link rel="stylesheet" type="text/css" href="tips_tricks.css" title="style" />
</head>
<h1> Thank you for your information! </h1>
<body>
<?php
	#connect to mysql database
	$db = mysqli_connect("studentdb-maria.gl.umbc.edu", "han20", "han20", "han20");

	if (mysqli_connect_errno())
		exit("Error - could not connect to MySQL");

?>

<?php
	$a_name = $_POST['usrname'];
	$a_post = $_POST['upost'];
	$constructed_query ="INSERT INTO food_blog (food_id,user_id, tip_cook) VALUES(NULL,'$a_name','$a_post')";
	$result = mysqli_query($db, $constructed_query);					  


 ?>

<?php
	$constructed_query1 = "SELECT * FROM food_blog";
	$result1 = mysqli_query($db, $constructed_query1);
	
	$num_rows = mysqli_num_rows($result1);
	$num_fields = mysqli_num_fields($result1);
?>

<?php
	for($row_num = 1; $row_num <= $num_rows; $row_num++){
	echo '<div class="div2">';
	$row_array = mysqli_fetch_array($result1);
	print("$row_array[user_id] <br />
		  $row_array[tip_cook]<br />");
	echo '</div>';
	}
?>

<p>
<a href="tips_and_tricks.html"> Enter another post</a> <br />
</p>
</body>
</html>