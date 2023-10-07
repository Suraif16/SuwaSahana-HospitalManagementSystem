<?php
include_once 'Connection2.php';
if (count($_POST) > 0) {
    mysqli_query($connection, "UPDATE records set Patient_ID='" . $_POST['Patient_ID'] . "', Registered_ID='" . $_POST['Registered_ID'] . "', Weight='" . $_POST['Weight'] . "', Blood_Pressure='" . $_POST['Blood_Pressure'] . "' ,  Pulse='" . $_POST['Pulse'] . "' ,Temperature='" . $_POST['Temperature'] . "' WHERE Patient_ID='" . $_POST['Patient_ID'] . "'");
    $message = "Record Modified Successfully";
}
$result = mysqli_query($connection, "SELECT * FROM records WHERE Patient_ID='" . $_GET['Patient_ID'] . "'");
$row = mysqli_fetch_array($result);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update </title>
    <link rel="icon" href="Home/Logo.png">
    <link rel="stylesheet" href="NurseUpdateprocess.css">
    <style>
        body {
            background-image: url('Home/Nurse.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1 class="role">Update</h1>
        <button type="button" class="button">
            <a href="NurseUpdate.php" class="Back"> Back </a>
        </button>
    </div>
    <div class=addform>
        <form name="frmUser" method="post" action="">
            <div><?php if (isset($message)) {
                        echo $message;
                    } ?>
                <h1 align="center">Update Details</h1>
                <br>Patient_ID: <br>
                <input type="hidden" name="Patient_ID" class="txtField" value="<?php echo $row['Patient_ID']; ?>">
                <input class="box" type="text" name="Patient_ID" value="<?php echo $row['Patient_ID']; ?>">
                <br>
                Registered_ID: <br>
                <input class="box" type="text" name="Registered_ID" class="txtField" value="<?php echo $row['Registered_ID']; ?>">
                <br>
                Weight :<br>
                <input class="box" type="text" name="Weight" class="txtField" value="<?php echo $row['Weight']; ?>">
                <br>
                Blood_Pressure:<br>
                <input class="box" type="text" name="Blood_Pressure" class="txtField" value="<?php echo $row['Blood_Pressure']; ?>">
                <br>
                Pulse:<br>
                <input class="box" type="text" name="Pulse" class="txtField" value="<?php echo $row['Pulse']; ?>">
                <br>
                Temperature:<br>
                <input class="box" type="text" name="Temperature" class="txtField" value="<?php echo $row['Temperature']; ?>">
                <br><br><br>
                <input class="save" type="submit" name="submit" value="Submit" class="buttom">

        </form>
    </div>
</body>

</html>