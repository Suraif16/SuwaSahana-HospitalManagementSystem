<?php
include_once 'Connection2.php';
$result = mysqli_query($connection,"SELECT * FROM employee");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="CeoDelete.css">
<title>Delete Employee Data</title>
	<style>
        body {
          background-image: url('Home/Ceo.png');
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
        <h1 class="role">Delete Records</h1>
        <button type="button" class="button">
                <a href="Ceo.php" class="Back"> Back </a>
        </button>
    </div>
<table class="table">
	<tr>
	<td>Emp_ID</td>
	<td>Name</td>
	<td>Action</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["Emp_ID"]; ?></td>
	<td><?php echo $row["Name"]; ?></td>
	<td><a class="delete" href="CeoDeleteProcess.php?Emp_ID=<?php echo $row["Emp_ID"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>