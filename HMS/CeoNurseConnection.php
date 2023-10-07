<?php 
	$Emp_ID = $_POST['Emp_ID'];
	$Name = $_POST['Name'];
	$Address = $_POST['Address'];
	$Contact_No = $_POST['Contact_No'];
	$Working_status = $_POST['Working_status'];

	$Registered_ID = $_POST['Registered_ID'];
	$Joined_Date = $_POST['Joined_Date'];
	$Resigned_Date = $_POST['Resigned_Date'];

	

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

		$stmt1 = $connection -> prepare("Insert into medical_staff(Registered_ID, Emp_ID, Joined_Date, Resigned_Date )
				values(?, ?, ?, ?)");

		$stmt1 -> bind_param("ssss", $Registered_ID, $Emp_ID, $Joined_Date, $Resigned_Date );
		$stmt1 -> execute();

		$stmt2 = $connection -> prepare("Insert into nurse(Registered_ID)
				values(?)");
		$stmt2 -> bind_param("s", $Registered_ID);
		$stmt2 -> execute();

		
		echo "Saved Successfully";

		$stmt -> close();
		$stmt1 -> close();
		$stmt2 -> close();
	
		$connection -> close();

	}
