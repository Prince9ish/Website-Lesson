<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "testshop";

	$obj_con = mysqli_connect($hostname,$username,$password,$dbname);
	$sql = "select N_Num FROM Num";
	$rs = mysqli_query($obj_con,$sql);
	$color = "#9C9C9B";
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php while ($row = mysqli_fetch_array($rs)) { ?>
			<?php 
				if($row['N_Num'] == 1){
					$color = "#3A570A";
				}elseif($row['N_Num'] == 2){
					$color = "#F9D008";
				}elseif($row['N_Num'] == 3){
					$color = "#F95108";
				}else{
					$color = "#9C9C9B";
				}
			?>
			<div style="background-color: <?= $color ?>;height: 30px;border-style: dashed; border-width: 0.5px; margin-bottom: 5px;"></div>
		<?php }?>

	</body>
</html>