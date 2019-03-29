<!DOCTYPE html>
<html lang="EN"><head>
	<title>Creating your own recipes</title>
	<link rel="stylesheet" type="text/css" href="tips_tricks.css" title="style" />
</head>
<h1> Thank you for creating your own recipes! </h1>
<body>
<?php
	#connect to mysql database
	$db = mysqli_connect("studentdb-maria.gl.umbc.edu", "han20", "han20", "han20");

	if (mysqli_connect_errno())
		exit("Error - could not connect to MySQL");

?>



<?php
	$constructed_query1 = "SELECT * FROM my_recipes";
	$result1 = mysqli_query($db, $constructed_query1);
	
	$num_rows = mysqli_num_rows($result1);
	$num_fields = mysqli_num_fields($result1);
?>

<?php
	for($row_num = 1; $row_num <= $num_rows; $row_num++){
	echo '<div class="div2">';
	$row_array = mysqli_fetch_array($result1);
	print("$row_array[food_name] <br />
		  $row_array[description]<br />
		  $row_array[steps] <br />");
	echo '</div>';
	}
?>

<p>
<a href="my_recipes.html"> Enter another post</a> <br />
</p>
</body>
</html>