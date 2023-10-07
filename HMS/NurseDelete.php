<?php
include_once 'Connection2.php';
$result = mysqli_query($connection,"SELECT * FROM records");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="NurseDelete.css">
<title>Delete Patient Record</title>
    <style>
        body {
          background-image: url('Home/Nurse.jpg');
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
        <h1 class="role">Delete Patient Records</h1>
        <button type="button" class="button">
                <a href="Nurse.php" class="Back"> Back </a>
        </button>
    </div>
    <table class="table">
        <tr>
        <th>Patient_ID</th>
        <th>Registered_ID</th>
        <th> Action </th>
        </tr>
        <?php
        $i=0;
        while($row = mysqli_fetch_array($result)) {
        ?>
        <tr class="<?php if(isset($classname)) echo $classname;?>">
        <td><?php echo $row["Patient_ID"]; ?></td>
        <td><?php echo $row["Registered_ID"]; ?></td>
        <td><a class="delete" href="NurseDeleteProcess.php?Patient_ID=<?php echo $row["Patient_ID"]; ?>">Delete</a></td>
        </tr>
        <?php
        $i++;
        }
        ?>
    </table>
</body>
</html>