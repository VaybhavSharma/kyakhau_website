<?php
if(isset($_POST['veg']) && isset($_POST['non-veg'])){
	$veg = $_POST['veg'];
	$non_veg = $_POST['non-veg'];

	if(!empty($veg)){
		echo "veg choosen";
	}elseif (!empty($non_veg)) {
		echo "non-veg choosen";
	}
	else{
		echo "please choose";
	}
}
?>