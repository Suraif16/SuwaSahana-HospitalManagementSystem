<?php
include_once 'Connection2.php';
$result = mysqli_query($connection,"SELECT * FROM doctor");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="Home/Logo.png">
<link rel="stylesheet" href="DoctorDelete.css">
<title>Delete Patient</title>
    <style>
        body {
          background-image: url('Home/Doctor.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;  
          background-size: cover;
        }
        td, th
        {
            border: 1px solid black;
            padding: 10px;
        }
        table
        {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 class="role">Delete Patient</h1>
        <button type="button" class="button">
                <a href="Doctor.php" class="Back"> Back </a>
        </button>
    </div>
    <table class="table">
        <tr>
        <td>DEA_No</td>
        <td>Registered_ID</td>
        <td> Action </td>
        </tr>
        <?php
        $i=0;
        while($row = mysqli_fetch_array($result)) {
        ?>
        <tr class="<?php if(isset($classname)) echo $classname;?>">
        <td><?php echo $row["DEA_No"]; ?></td>
        <td><?php echo $row["Registered_ID"]; ?></td>
        <td><a class="delete" href="DoctorDeleteProcess.php?DEA_No=<?php echo $row["DEA_No"]; ?>">Delete</a></td>
        </tr>
        <?php
        $i++;
        }
        ?>
    </table>
</body>
</html>