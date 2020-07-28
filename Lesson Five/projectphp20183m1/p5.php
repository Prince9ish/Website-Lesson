<?php

	$str_imgname_1 = "basic_new_de-01.png";
	$str_pdname_1 = "Basic Programming";
	$str_pdprice_1 = "1,500";

?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>

		<div class="inner-wrapper">
			<div class="list">
				<div class="item">
					<img src="images/<?= $str_imgname_1 ?>" />
					<h3><?= $str_pdname_1 ?></h3>
					<h4><?= $str_pdprice_1 ?> บาท</h4>
				</div>
				<div class="item">
					<img src="images/basic_new_de-01.png" />
					<h3>Product Name</h3>
					<h4>Price</h4>
				</div>
				<div class="item">
					<img src="images/basic_new_de-01.png" />
					<h3>Product Name</h3>
					<h4>Price</h4>
				</div>
				<div class="clear"></div>
			</div>
		</div>

		

	</body>
</html>