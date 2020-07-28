<?php
	$A = 152;
	$B = 3;

	$Red="#F00";
	$Green = "#0F0";
	$Blue = "#00F";

	$Plus = " + ";
	$Sub = " - ";
	$Mul =" * ";
	$Div =" / ";
	$Equal = " = ";

?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<div>
			<h1>
				<span style="color: <?= $Blue ?>">F : <?=$A?></span>
			</h1>
			<h1>
				<span style="color: <?= $Red ?>">C : <?=($A-32)/1.8 ?></span>
			</h1>
			<h1>
				<span style="color: <?= $Green ?>">K : <?=(($A-32)/1.8) +273.15 ?></span>
			</h1>

		</div>

	</body>
</html>


