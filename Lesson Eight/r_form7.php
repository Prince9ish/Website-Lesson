<?php
	if(isset($_POST['save'])){
		// ------------------------------------------------------------
		// Config Database
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "testshop";

		$obj_con = mysqli_connect($hostname,$username,$password,$dbname);

		if(!$obj_con){
			header("location:error.php");
			exit();
		}

		mysqli_query($obj_con,"SET NAME UTF8");
		// ------------------------------------------------------------
	
		$name = $_POST['name'];
		$surname = $_POST['surname'];

		$sql = "insert into product(P_Name,P_Price) values(";
		$sql .= "'" . $name . "',";
		$sql .=  "'" . $surname . "')";


		if(mysqli_query($obj_con,$sql)){
			echo "OK";
		}else{
			echo "Error ! : " . $sql;
		}
	} else {
		header("location:form7.php");
		exit();
	}

?>