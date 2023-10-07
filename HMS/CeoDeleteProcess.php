<?php
include_once 'Connection2.php';
$sql = "DELETE FROM employee WHERE Emp_ID='" . $_GET["Emp_ID"] . "'";
if (mysqli_query($connection, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
mysqli_close($connection);
?>