<?php 

	$Emp_ID = $_POST['Emp_ID'];
	$Name = $_POST['Name'];
	$Address = $_POST['Address'];
	$Contact_No = $_POST['Contact_No'];
	$Working_status = $_POST['Working_status'];

	$Hourly_Charge_Rate = $_POST['Hourly_Charge_Rate'];
	
	

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
		$stmt1 -> bind_param("s", $Emp_ID);
		$stmt1 -> execute();

		$stmt2 = $connection -> prepare("Insert into attendant(Emp_ID, Hourly_Charge_Rate)
				values(?, ?)");
		$stmt2 -> bind_param("si", $Emp_ID, $Hourly_Charge_Rate);
		$stmt2 -> execute();

		
		echo "Saved Successfully";

		$stmt -> close();
		$stmt1 -> close();
		$stmt2 -> close();
		

		$connection -> close();

	
	}

?>