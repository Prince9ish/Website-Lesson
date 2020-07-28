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

	$sql = "select P_Name,P_Surname,P_Age, P_Email FROM People1";
	$rs = mysqli_query($obj_con,$sql);

?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php while ($row = mysqli_fetch_array($rs)) { ?>
			<div style="margin-bottom: 5px;"> <?=$row['P_Name']?> <?=$row['P_Surname']?> <?=$row['P_Age'] ?> <?=$row['P_Email']?> </div>
		<?php } ?>
	</body>
</html>