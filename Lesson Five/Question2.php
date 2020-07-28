<?php
	$A = 1;
	$B = 5;
	$Red="#F00";
	$Green = "#0F0";
	$Blue = "#00F";
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<div>
			<h1 style="color: <?= $Red ?>"><?= $A ?><?= $B ?></h1>
			<h1>
				<span style="color: <?= $Blue ?>"><?= $B ?></span>
				<span style="color: <?= $Green ?>"><?= $A ?></span>
			</h1>
		</div>

	</body>
</html>


