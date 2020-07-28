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

	$sql = "select P_Name,P_Surname,P_Age FROM People";
	$rs = mysqli_query($obj_con,$sql);

?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php while ($row = mysqli_fetch_array($rs)) { 
				if($row['P_Age'] > 60){
					$Color = "#0F0";
				}else{
					$Color = "#FFF";
				}
			?>
			<div style="background-color: <?= $Color ?>;margin-bottom: 5px;"> <?=$row['P_Name']?> <?=$row['P_Surname']?> <?=$row['P_Age']?> </div>
		<?php } ?>
	</body>
</html>