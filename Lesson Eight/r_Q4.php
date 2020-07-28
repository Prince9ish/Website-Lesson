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

		$Num = $_POST['num'];

		$sql = "insert into Num(N_Num) VALUES('" . $Num . "')";

		if(mysqli_query($obj_con,$sql)){
			header("location:Q4.php");
		}

	}else{

	}
