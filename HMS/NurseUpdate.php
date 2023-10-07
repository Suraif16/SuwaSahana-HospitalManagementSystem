<?php
include_once 'Connection2.php';
$result = mysqli_query($connection,"SELECT * FROM records");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Update Patient Record</title>
   <link rel="icon" href="Home/Logo.png">
   <link rel="stylesheet" href="NurseUpdate.css">
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
<?php
if (mysqli_num_rows($result) > 0) {
?>
<div class="header">
        <h1 class="role">Update Patient Records</h1>
        <button type="button" class="button">
                <a href="Nurse.php" class="Back"> Back </a>
        </button>
</div>
<table class="table">
	  <tr>
	    <td>Patient_ID</td>
		<td>Registered_ID</td>
		<td>Weight</td>
		<td>Blood_Pressure</td>
		<td>Pulse</td>
		<td>Temperature</td>
		<td>Action</td>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["Patient_ID"]; ?></td>
		<td><?php echo $row["Registered_ID"]; ?></td>
		<td><?php echo $row["Weight"]; ?></td>
		<td><?php echo $row["Blood_Pressure"]; ?></td>
		<td><?php echo $row["Pulse"]; ?></td>
		<td><?php echo $row["Temperature"]; ?></td>
		<td><a class="action" href="NurseUpdateprocess.php?Patient_ID=<?php echo $row["Patient_ID"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>