<?php
if(isset($_POST['submit'])){
$selected_radio = $_POST['food'];

	if($selected_radio =="veg"){
		header('location:veg.php');
	}elseif ($selected_radio =="non-veg") {
		header('location:non-veg.php');
	}
	else{
		echo "please choose";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kya khaun</title>
</head>
<body>
	<form action="index.php" method="POST">
		<input type="radio" name="food" value="veg">Veg<br />
		<input type="radio" name="food" value="non-veg">Non-Veg<br />
		<input type="submit" name="submit" value="Choose Food">
	</form>
</body>
</html>