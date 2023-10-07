<?php
include_once 'Connection2.php';
$sql = "DELETE FROM doctor WHERE DEA_No='" . $_GET["DEA_No"] . "'";
if (mysqli_query($connection, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
mysqli_close($connection);
?>