<?php
include_once 'Connection2.php';
$sql = "DELETE FROM records WHERE Patient_ID='" . $_GET["Patient_ID"] . "'";
if (mysqli_query($connection, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
mysqli_close($connection);
?>