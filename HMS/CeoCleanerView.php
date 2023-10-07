<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cleaner Details</title>
    <link rel="icon" href="Home/Logo.png">
    <link rel="stylesheet" href="CeoCleanerView.css">
    <style>
        body {
          background-image: url('Home/Cleaner.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;  
          background-size: cover;
          background-color: tan;
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
        <h1 class="role">View Cleaner Details</h1>
        <button type="button" class="button">
                <a href="CeoView.php" class="Back"> Back </a>
       </button>
    </div>
        <?php require_once('connection2.php');

            $query = "SELECT employee.Emp_ID, employee.Name, employee.Address, employee.Contact_No, employee.Working_status,Cleaner.Contract_No, Cleaner.Contract_startDate, Cleaner.Contract_EndDate FROM employee INNER JOIN Cleaner ON employee.Emp_ID=Cleaner.Emp_ID ";

            $result_set = mysqli_query($connection, $query);

            

           
            
            if($result_set )
            {
                $table = '<table class="table">';
                $table .= '<tr><th> Emp_ID</th><th> Name </th><th> Address </th><th> Contact_No </th>
                          <th> Working_status </th> <th> Contract_No</th><th> Contract_startDate </th> <th> Contract_EndDate </th>
                          
                          </tr>';
                while(($record = mysqli_fetch_assoc($result_set))) 
                {
                    $table .= '<tr>'; 
                    
                    $table .= '<td>' . $record['Emp_ID']  . '</td>';
                    $table .= '<td>' . $record['Name']  . '</td>';
                    $table .= '<td>' . $record['Address']  . '</td>';
                    $table .= '<td>' . $record['Contact_No']  . '</td>';
                    $table .= '<td>' . $record['Working_status']  . '</td>';
                    $table .= '<td>' . $record['Contract_No']  . '</td>';
                    $table .= '<td>' . $record['Contract_startDate']  . '</td>';
                    $table .= '<td>' . $record['Contract_EndDate']  . '</td>';
                  
                    

                   
                    $table .= '</tr>';
                }
                echo $table;
                $table .= '</table>';
            }
        ?>   

</body>
</html>
