<?php
if(isset($_POST['submit'])){
$selected_radio = $_POST['food'];

	if($selected_radio =="lunch"){
		header('location:non-veg-lunch.php');
	}elseif ($selected_radio =="dinner") {
		header('location:non-veg-dinner.php');
	}
	elseif ($selected_radio =="breakfast") {
		header('location:non-veg-breakfast.php');
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
	<title>Veg khaun</title>
</head>
<body>
	<form action="non-veg.php" method="POST">
		<input type="radio" name="food" value="breakfast">Breakfast<br />
		<input type="radio" name="food" value="lunch">Lunch<br />
		<input type="radio" name="food" value="dinner">Dinner<br />
		<input type="submit" name="submit" value="Choose Food">
	</form>
</body>
</html>