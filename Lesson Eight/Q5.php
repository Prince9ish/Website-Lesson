<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "testshop";

	$obj_con = mysqli_connect($hostname,$username,$password,$dbname);

	if(!$obj_con){
		header("location:error.php");
		exit();
	}

	$color = "#000";
	$color = "#E75816";
	$sql = "SELECT C_Code FROM Color INNER JOIN Number ON Color.C_ID = Number.NR_Num";
	$rs = mysqli_query($obj_con,$sql);

	
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Form</h1>
		<form name="frmdata" method="post" action="r_Q5.php">
			<?php while ($row = mysqli_fetch_array($rs)) { ?>
				<input type="submit" name="<?= $row['C_Code']?>" style="background-color: #<?= $row['C_Code']?>"> <br/>
			<?php } ?>
		</form>
	</body>
</html>