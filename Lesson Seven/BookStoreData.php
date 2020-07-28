<?php 
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Book";

	$obj_con = mysqli_connect($hostname,$username,$password,$dbname);

	if(!$obj_con){
		header("location:error.php");
		exit();
	}


	mysqli_query($obj_con,"SET NAME UTF8");

	$sql = "SELECT * FROM Books";
	$rs = mysqli_query($obj_con,$sql);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Books</title>
		<link rel="stylesheet" type="text/css" href="CSS/Styles.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	</head>
	<body>
		<div class="heading">Book Store</div>
		<div class="subheading">Featured</div>
		<div class="container">
			<?php while ($row = mysqli_fetch_array($rs)) { ?>
				<div class="box">
					<img src="<?= $row['B_Image'] ?>" class="image">
					<div class="title"><?= $row['B_Title'] ?></div>
					<div class="aurthor"><?= $row['B_Author'] ?></div>
					<div class="detail"><?= $row['B_Details'] ?></div>
					<div class="price">$ <?= $row['B_Price'] ?></div>
				</div>
			<?php } ?>
			<div style="clear: both"></div>
		</div>

		<div class="box">
			<iframe width="290" height="200" src="https://www.youtube.com/embed/Lfj-AZkUZj8?autoplay=1&controls=0&loop=1&amp;showinfo=0" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			<div class="title">Mclaren</div>
			<div class="aurthor">720S</div>	
			<div class="detail">The McLaren 720S embodies our relentless quest to push the limits of possibility. Lighter, stronger, faster.</div>
			<div class="price">$ 350000</div>
		</div>

	</body>
</html>