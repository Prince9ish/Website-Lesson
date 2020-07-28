<?php
	$t1 = $_POST['t1'];
	$t2 = $_POST['t2'];
	$t3 = $_POST['t3'];
	$color = "#000";
	if($t1 > 5){
		$color = "#E75816";
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<div> <?= $t1 ?> </div>
		<span style="font-size: 50px;color: <?= $color ?>"> <?= $t2 ?> </span>
		<span> <?= $t3 ?> </span>
	</body>
</html>