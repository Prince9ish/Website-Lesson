<?php

	if(isset($_POST['save'])){
		$name = $_POST['name'];
		$surname = $_POST['surname'];

		$sql = "insert into customer(cs_name,cs_surname) values(";
		$sql .= "'" . $name . "',";
		$sql .=  "'" . $surname . "',)";

		echo $sql;
	} else {
		header("location:form6.php");
		exit();
	}

?>