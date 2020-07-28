<?php
	$A = 1;
	$B = 5;

	$Red="#F00";
	$Green = "#0F0";
	$Blue = "#00F";

	$Plus = " + ";
	$Sub = " - ";
	$Mul =" * ";
	$Equal = " = ";

?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<div>
			<h1>
				<span style="color: <?= $Red ?>"><?= $A ?><?= $Plus ?><?= $B ?><?= $Equal ?><?= $A+$B ?></span>
			</h1>
			<h1>
				<span style="color: <?= $Green ?>"><?= $A ?><?= $Sub ?><?= $B ?><?= $Equal ?><?= $A-$B ?></span>
			</h1>
			<h1>
				<span style="color: <?= $Blue ?>"><?= $A ?><?= $Mul ?><?= $B ?><?= $Equal ?><?= $A*$B ?></span>
			</h1>
		</div>

	</body>
</html>


