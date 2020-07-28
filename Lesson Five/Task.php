<?php
	$Text = "One";
	$Picture = "Images/I1.jpg";
	$Type = "Type";
	$Price = "$ 1000.00 ";

	$Text1 = "Two";
	$Picture1 = "Images/I2.jpg";
	$Type1 = "Type";
	$Price1 = "$ 1200.00 ";

	$Text2 = "Three";
	$Picture2 = "Images/I3.jpg";
	$Type2 = "Type";
	$Price2 = "$ 1200.00 ";

	$Text3 = "Four";
	$Picture3 = "Images/I4.jpg";
	$Type3 = "Type";
	$Price3 = "$ 1200.00 ";

	$Text4 = "Five";
	$Picture4 = "Images/I5.jpg";
	$Type4 = "Type";
	$Price4 = "$ 1200.00 ";

	$Text5 = "Six";
	$Picture5 = "Images/I6.jpg";
	$Type5 = "Type";
	$Price5 = "$ 1200.00 ";

	$Text6 = "Seven";
	$Picture6 = "Images/I7.jpg";
	$Type6 = "Type";
	$Price6 = "$ 1200.00 ";

?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="CSS/Styles.css">
		<link href="https://fonts.googleapis.com/css?family=Parisienne" rel="styleI
	</head>
	<body>
		<div class="container">
			<div class="box">
				<img src="<?= $Picture?>" class="image">
				<div class="heading"><?= $Text?></div>
				<div class="type"><?= $Type?></div>
				<div class="price"><?= $Price?></div>
			</div>

			<div class="box">
				<img src="<?= $Picture1?>" class="image">
				<div class="heading"><?= $Text1?></div>
				<div class="type"><?= $Type1?></div>
				<div class="price"><?= $Price1?></div>
			</div>

			<div class="box">
				<img src="<?= $Picture2?>" class="image">
				<div class="heading"><?= $Text2?></div>
				<div class="type"><?= $Type2?></div>
				<div class="price"><?= $Price2?></div>
			</div>

			<div class="box">
				<img src="<?= $Picture3?>" class="image">
				<div class="heading"><?= $Text3?></div>
				<div class="type"><?= $Type3?></div>
				<div class="price"><?= $Price3?></div>
			</div>

			<div class="box">
				<img src="<?= $Picture4?>" class="image">
				<div class="heading"><?= $Text4?></div>
				<div class="type"><?= $Type4?></div>
				<div class="price"><?= $Price4?></div>
			</div>

			<div class="box">
				<img src="<?= $Picture5?>" class="image">
				<div class="heading"><?= $Text5?></div>
				<div class="type"><?= $Type5?></div>
				<div class="price"><?= $Price5?></div>
			</div>

			<div class="box">
				<img src="<?= $Picture6?>" class="image">
				<div class="heading"><?= $Text6?></div>
				<div class="type"><?= $Type6?></div>
				<div class="price"><?= $Price6?></div>
			</div>

			<div style="clear: both"></div>
		</div>
	</body>
</html>


