<?php 
	$Patient_ID = $_POST['Patient_ID'];
	$Registered_ID = $_POST['Registered_ID'];
	$Weight = $_POST['Weight'];
	$Blood_Pressure = $_POST['Blood_Pressure'];
	$Pulse = $_POST['Pulse'];
	$Temperature = $_POST['Temperature'];
	

	//Database connection
	$connection = mysqli_connect('localhost', 'root', '', 'assignment');

	// Checking the connection
	if ($connection -> connect_error) {
		die('Database connection failed : ' .$connection->connect_error);
	}
	else 
	{
		$stmt = $connection -> prepare("Insert into records(Patient_ID, Registered_ID, Weight, Blood_Pressure, Pulse, Temperature)
				values(?, ?, ?, ?, ?, ? )");
		$stmt -> bind_param("ssiiii", $Patient_ID, $Registered_ID, $Weight, $Blood_Pressure, $Pulse, $Temperature );
		$stmt -> execute();

		
		echo "Saved Successfully";

		$stmt -> close();
		

		$connection -> close();

	
	}







	


