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

		$Name = $_POST['Name'];
		$Surname = $_POST['Surname'];
		$Age = $_POST['Age'];

		$sql = "insert into People(P_Name,P_Surname,P_Age) VALUES('" . $Name . "','" . $Surname ."','".$Age."')";

		if(mysqli_query($obj_con,$sql)){
			header("location:Q6.php");
		}

	}else{

	}
