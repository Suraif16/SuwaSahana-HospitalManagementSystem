<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Medical Staff Records</title>
    <link rel="icon" href="Home/Logo.png">
    <link rel="stylesheet" href="CeoMedicalStaffView.css">
    <style>
        body {
            background-image: url('Home/staff.jpg');
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
        <h1 class="role">View Medical Staff Records</h1>
        <button type="button" class="button">
            <a href="CeoView.php" class="Back"> Back </a>
        </button>
    </div>
    <?php require_once('connection2.php');

    $query = "SELECT employee.Emp_ID, employee.Name, employee.Address,employee.Contact_No, employee.Working_status,medical_staff.Registered_ID, medical_staff.Joined_Date, medical_staff.Resigned_Date from employee inner join medical_staff  on employee.Emp_ID = medical_staff.Emp_ID";

    $result_set = mysqli_query($connection, $query);

    if ($result_set) {
        $table = '<table class="table">';
        $table .= '<tr><th> Emp_ID</th><th> Name </th><th> Address </th><th> Contact_No </th>
                          <th> Working_status </th> <th> Registered_ID</th><th> Joined_Date </th> <th> Resigned_Date </th>
                          </tr>';
        while (($record = mysqli_fetch_assoc($result_set))) {
            $table .= '<tr>';

            $table .= '<td>' . $record['Emp_ID']  . '</td>';
            $table .= '<td>' . $record['Name']  . '</td>';
            $table .= '<td>' . $record['Address']  . '</td>';
            $table .= '<td>' . $record['Contact_No']  . '</td>';
            $table .= '<td>' . $record['Working_status']  . '</td>';
            $table .= '<td>' . $record['Registered_ID']  . '</td>';
            $table .= '<td>' . $record['Joined_Date']  . '</td>';
            $table .= '<td>' . $record['Resigned_Date']  . '</td>';

            $table .= '</tr>';
        }
        echo $table;
        $table .= '</table>';
    }
    ?>

</body>
</html>