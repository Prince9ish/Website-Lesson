<?php
	print_r($_POST);
	echo "<br/>";

	if( isset($_POST['ba'])){
		echo "Button A";
	} elseif (isset($_POST['bb'])){
		echo "Button B";
	}elseif (isset($_POST['bc'])){
		echo "Button C";
	}else{
		echo "No !!!!";
	}
?>