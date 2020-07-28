<?php

	$str_hostname = "localhost";
	$str_username = "root";
	$str_password = "";
	$str_dbname = "courseprogramming_data";

	$obj_con = mysqli_connect($str_hostname,$str_username,$str_password,$str_dbname);

	if(!$obj_con) {
		header("location:error.php");
		exit();
	}

	mysqli_query($obj_con,"SET NAMES UTF8");

	$str_sql = "select * from courses_tb";
	$obj_rs = mysqli_query($obj_con,$str_sql);

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

				<?php while ($obj_row = mysqli_fetch_array($obj_rs)) { ?>

				<div class="item">
					<img src="images/<?= $obj_row['cs_imgname'] ?>" />
					<h3><?= $obj_row['cs_name'] ?></h3>
					<h4><?= $obj_row['cs_price'] ?> บาท</h4>
				</div>

				<?php } ?>
				
				<div class="clear"></div>
			</div>
		</div>

		

	</body>
</html>