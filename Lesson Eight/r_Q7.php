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
		$Mail = $_POST['Email'];

		$sql = "insert into People1(P_Name,P_Surname,P_Age,P_Email) VALUES('" . $Name . "','" . $Surname ."','".$Age."', '".$Mail."')";

		if(mysqli_query($obj_con,$sql)){
			header("location:Q7.php");
		}

	}else{

	}
