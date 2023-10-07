<?php 
	$Emp_ID = $_POST['Emp_ID'];
	$Name = $_POST['Name'];
	$Address = $_POST['Address'];
	$Contact_No = $_POST['Contact_No'];
	$Working_status = $_POST['Working_status'];

	$Contract_No = $_POST['Contract_No'];
	$Contract_startDate = $_POST['Contract_startDate'];
	$Contract_EndDate = $_POST['Contract_EndDate'];

	

	//Database connection
	$connection = mysqli_connect('localhost', 'root', '', 'assignment');

	// Checking the connection
	if ($connection -> connect_error) {
		die('Database connection failed : ' .$connection->connect_error);
	}
	else 
	{
		$stmt = $connection -> prepare("Insert into employee(Emp_ID, Name, Address, Contact_No, Working_status )
				values(?, ?, ?, ?, ? )");
		$stmt -> bind_param("sssis", $Emp_ID, $Name, $Address, $Contact_No, $Working_status );
		$stmt -> execute();

		$stmt1 = $connection -> prepare("Insert into non_medical_staff(Emp_ID)
				values(?)");
		$stmt1 -> bind_param("s", $Emp_ID );
		$stmt1 -> execute();

		$stmt2 = $connection -> prepare("Insert into cleaner(Emp_ID, Contract_No, Contract_startDate, Contract_EndDate)
				values(?, ?, ?, ?)");
		$stmt2 -> bind_param("ssss", $Emp_ID, $Contract_No, $Contract_startDate, $Contract_EndDate);
		$stmt2 -> execute();

		
		echo "Saved Successfully";

		$stmt -> close();
		$stmt1 -> close();
		$stmt2 -> close();
		

		$connection -> close();

	
	}


