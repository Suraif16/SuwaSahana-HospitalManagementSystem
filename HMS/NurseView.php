<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Patient Records</title>
    <link rel="icon" href="Home/Logo.png">
    <link rel="stylesheet" href="NurseView.css">
    <style>
        body {
            background-image: url('Home/Nurse.jpg');
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
        <h1 class="role">View Patient Records</h1>
        <button type="button" class="button">
            <a href="Nurse.php" class="Back"> Back </a>
        </button>
    </div>
    <?php require_once('connection2.php');

    $query = "SELECT * FROM records";
    $result_set = mysqli_query($connection, $query);


    if ($result_set) {
        $table = '<table class="table">';
        $table .= '<tr><th> Patient_ID</th><th> Registered_ID </th><th>Weight</th><th> Blood_Pressure </th>
                          <th> Pulse</th> <th> Temperature </th> 
                           
                          </tr>';
        while (($record = mysqli_fetch_assoc($result_set))) {
            $table .= '<tr>';

            $table .= '<td>' . $record['Patient_ID']  . '</td>';
            $table .= '<td>' . $record['Registered_ID']  . '</td>';

            $table .= '<td>' . $record['Weight']  . '</td>';
            $table .= '<td>' . $record['Blood_Pressure']  . '</td>';


            $table .= '<td>' . $record['Pulse']  . '</td>';
            $table .= '<td>' . $record['Temperature']  . '</td>';



            $table .= '</tr>';
        }
        echo $table;
        $table .= '</table>';
    }
    ?>

</body>

</html>