<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/styleform2.css">
	</head>
	<body>

		<div>
			<form name="frmdata" method="post" action="r_tableform2.php">
				<table>
					<tr>
						<td>รหัสลูกค้า</td>
						<td><input type="text" name="txtcode"></td>
					</tr>
					<tr>
						<td>ชื่อ</td>
						<td><input type="text" name="txtname"></td>
					</tr>
					<tr>
						<td>นามสกุล</td>
						<td><input type="text" name="txtsurname"></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="btnsave">
						</td>
					</tr>
				</table>
			</form>
		</div>

	</body>
</html>