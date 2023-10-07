<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Attendant Details</title>
    <link rel="icon" href="Home/Logo.png">
    <link rel="stylesheet" href="CeoAttendantView.css">
    <style>
        body {
          background-image: url('Home/Attendant.jpg');
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
        <h1 class="role">View Attendant Details</h1>
        <button type="button" class="button">
                <a href="CeoView.php" class="Back"> Back </a>
       </button>
    </div>
        <?php require_once('connection2.php');

            $query = "SELECT employee.Emp_ID, employee.Name, employee.Address,employee.Contact_No, employee.Working_status, attendant.Hourly_Charge_Rate from employee right join attendant on employee.Emp_ID = attendant.Emp_ID";

            $result_set = mysqli_query($connection, $query);
                       
            if($result_set )
            {
                $table = '<table class="table">';
                $table .= '<tr><th> Emp_ID</th><th> Name </th><th> Address </th><th> Contact_No </th>
                          <th> Working_status </th><th> Hourly_Charge_Rate </th> 
                           
                          </tr>';
                while(($record = mysqli_fetch_assoc($result_set))) 
                {
                    $table .= '<tr>'; 
                    
                    $table .= '<td>' . $record['Emp_ID']  . '</td>';
                    $table .= '<td>' . $record['Name']  . '</td>';
                    $table .= '<td>' . $record['Address']  . '</td>';
                    $table .= '<td>' . $record['Contact_No']  . '</td>';
                    $table .= '<td>' . $record['Working_status']  . '</td>';
                    $table .= '<td>' . $record['Hourly_Charge_Rate']  . '</td>';
                    
                    

                   
                    $table .= '</tr>';
                }
                echo $table;
                $table .= '</table>';
            }
        ?>   

</body>
</html>
