<?php 
	$Patient_ID = $_POST['Patient_ID'];
	$Patient_Name = $_POST['Patient_Name'];
	$BirthDate = $_POST['BirthDate'];
	$FName = $_POST['FName'];
	$LName = $_POST['LName'];
	$Contact_No = $_POST['Contact_No'];
	$Relationship = $_POST['Relationship'];
	$EAddress = $_POST['EAddress'];
	$Company_Name = $_POST['Company_Name'];
	$Branch_Name = $_POST['Branch_Name'];
	$Branch_Address = $_POST['Branch_Address'];
	$Branch_ContactNo = $_POST['Branch_ContactNo'];
	$SFName = $_POST['SFName'];
	$SLName = $_POST['SLName'];
	$SRelationship = $_POST['SRelationship'];
	$Saddress = $_POST['Saddress'];
	$SContact_No = $_POST['SContact_No'];
	$DEA_NO = $_POST['DEA_NO'];

	//Database connection
	$connection = mysqli_connect('localhost', 'root', '', 'assignment');

	// Checking the connection
	if ($connection -> connect_error) {
		die('Database connection failed : ' .$connection->connect_error);
	}
	else 
	{
		$stmt = $connection -> prepare("Insert into patient(Patient_ID, Name)
				values(?, ? )");
		$stmt -> bind_param("ss", $Patient_ID, $Patient_Name);
		$stmt -> execute();

		$stmt1 = $connection -> prepare("Insert into inpatient(BirthDate, DEA_No)
				values(?, ? )");
		$stmt1 -> bind_param("ss", $BirthDate, $DEA_NO);
		$stmt1 -> execute();

		$stmt2 = $connection -> prepare("Insert into emergency_contact(Patient_ID, Address, Relationship, Contact_No, FName, LName)
				values(?, ?, ?, ?, ?, ?)");
		$stmt2 -> bind_param("sssiss", $Patient_ID, $EAddress, $Relationship, $Contact_No, $FName, $LName);
		$stmt2 -> execute();

		$stmt3 = $connection -> prepare("Insert into insurance_info(Patient_ID,	Branch_Contact_No, Branch_Name, Branch_Address, Company_Name)
				values(?, ?, ?, ?, ? )");
		$stmt3 -> bind_param("sisss", $Patient_ID, $Branch_ContactNo, $Branch_Name,  $Branch_Address, $Company_Name);
		$stmt3 -> execute();

		$stmt4 = $connection -> prepare("Insert into subscriber(Patient_ID, Contact_No,	Address, Relationship, FName, LName)
				values(?, ?, ?, ?, ?, ? )");
		$stmt4 -> bind_param("sissss", $Patient_ID, $SContact_No, $Saddress,  $SRelationship , $SFName, $SLName);
		$stmt4 -> execute();
		echo "Saved Successfully";

		$stmt -> close();
		$stmt1 -> close();
		$stmt2 -> close();
		$stmt3 -> close();
		$stmt4 -> close();

		$connection -> close();

	
	}



