<?php
	$Text = "Product";
	$Picture = "Images/Ferrari.jpg";
	$Size = 100;
	$Price = "$ 1000.00 ";
	$Red="#F00";
	$Green = "#0F0";
	$Blue = "#00F";
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<div style="float: left">
			<img src="<?= $Picture?>" style="width: 100%;">
		</div>
		<div style="float: right">
			<div style="font-size: <?= $Size?>px ;color: <?= $Green?>;"><?= $Text?></div>
			<div style="font-size: <?= $Size?>px ;color: <?= $Green?>;"><?= $Price?></div>
		</div>
		<div style="clear: both"></div>
	</body>
</html>


