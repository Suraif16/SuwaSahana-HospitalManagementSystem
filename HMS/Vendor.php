<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor</title>
    <link rel="icon" href="Home/Logo.png">
    <link rel="stylesheet" href="Vendor.css">
    <style>
        body {
            background-image: url('Home/Vendor.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        td,
        th {
            border: 1px solid black;
            padding: 10px;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1 class="role"> Vendor</h1>
        <button type="button" class="button">
            <a href="Home.php" class="Logout"> Logout </a>
        </button>
    </div>
    <div class="login">
        <h3> Enter the Registered No to view the records </h3>
        <form action="vendor.php" method="post">
            <div class="container">
                <label for="uname"><b>Regisered No</b></label>
                <input type="text" placeholder="Enter Registered No" name="userrole" required>
                <br>
                <button type="submit" name="submit" class="Login"> Login</button>
            </div>
        </form>
    </div>
</body>

</html>

<?php require_once('connection2.php'); ?>
<?php

if (isset($_POST['submit'])) {

    $errors = array();

    if (!isset($_POST['userrole']) || strlen(trim($_POST['userrole'])) < 1) {
        $errors[] = 'Registered No is missing/ invalid';
    }
    if (empty($errors)) {

        $userrole = mysqli_real_escape_string($connection, $_POST['userrole']);

        $query = "SELECT * FROM vendor
                   WHERE Registered_No = '{$userrole}'";

        $result_set = mysqli_query($connection, $query);

        if ($result_set) {

            $table = '<table class="table">';
            $table .= '<tr><th> Registered No</th><th> Contact No </th><th>Name</th><th> Address </th>
                           </tr>';
            while (($record = mysqli_fetch_assoc($result_set))) {
                $table .= '<tr>';

                $table .= '<td>' . $record['Registered_No']  . '</td>';
                $table .= '<td>' . $record['Contact_No']  . '</td>';

                $table .= '<td>' . $record['Name']  . '</td>';
                $table .= '<td>' . $record['Address']  . '</td>';

                $table .= '</tr>';
            }

            $table .= '</table>';
            echo $table;
        } else {
            $errors[] = 'Database query is failed';
        }
    }
}
?>
<?php mysqli_close($connection); ?>