<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Records</title>
    <link rel="icon" href="Home/Logo.png">
    <link rel="stylesheet" href="DoctorView.css">
    <style>
        body {
          background-image: url('Home/Doctor.jpg');
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
        <h1 class="role">View Records</h1>
        <button type="button" class="button">
                <a href="Doctor.php" class="Back"> Back </a>
       </button>
    </div>
        <?php require_once('connection2.php');

            $query = "SELECT * FROM patient";
            $result_set = mysqli_query($connection, $query);

            $query2 = "SELECT * FROM inpatient";
            $result_set2 = mysqli_query($connection, $query2);

            $query3 = "SELECT * FROM emergency_contact";
            $result_set3 = mysqli_query($connection, $query3);

            $query4 = "SELECT * FROM insurance_info";
            $result_set4 = mysqli_query($connection, $query4);
            

            /*$query5 = "SELECT * FROM Subscriber";
            $result_set5 = mysqli_query($connection, $query5);*/


            /*
            <th>Subscriber<br>Contact<br>No</th><th>Subscriber<br>Address</th><th>Subscriber<br>Relationship</th>
                          <th>Subscriber<br>FName</th><th>Subscriber<br>LName</th>
            */
            if($result_set and $result_set2 and $result_set3 and $result_set4 )//and $result_set5)
            {
                $table = '<table class="table">';
                $table .= '<tr><th> Patient<br>ID</th><th> Patient <br>Name </th><th> Date of <br>Birth </th><th> DEA_No </th>
                          <th> Emergency<br>FName </th> <th> Emergency <br>LName </th> <th> Emergency<br>ContactNo </th> 
                          <th>Emergency<br>Contact<br>Address</th><th>Relationship</th>
                          <th>Insurance<br>Branch<br>Contact<br>No</th><th>Insurance<br>Branch<br>Name</th>
                          <th>Insurance<br>Branch<br>Address</th><th>Insurance<br>Comapny<br>Name</th>
                           
                          </tr>';
                while(($record = mysqli_fetch_assoc($result_set)) and $record2 = mysqli_fetch_assoc($result_set2) and $record3 = mysqli_fetch_assoc($result_set3) and $record4 = mysqli_fetch_assoc($result_set4))// and $record5 = mysqli_fetch_assoc($result_set5))
                {
                    $table .= '<tr>'; 
                    
                    $table .= '<td>' . $record['Patient_ID']  . '</td>';
                    $table .= '<td>' . $record['Name']  . '</td>';
                
                    $table .= '<td>' . $record2['BirthDate']  . '</td>';
                    $table .= '<td>' . $record2['DEA_No']  . '</td>';

                    $table .= '<td>' . $record3['FName']  . '</td>';
                    $table .= '<td>' . $record3['LName']  . '</td>';
                    $table .= '<td>' . $record3['Contact_No']  . '</td>';
                    $table .= '<td>' . $record3['Address']  . '</td>';
                    $table .= '<td>' . $record3['Relationship']  . '</td>';
                    
                    $table .= '<td>' . $record4['Branch_Contact_No']  . '</td>';
                    $table .= '<td>' . $record4['Branch_Name']  . '</td>';
                    $table .= '<td>' . $record4['Branch_Address']  . '</td>';
                    $table .= '<td>' . $record4['Company_Name']  . '</td>';

                   /* $table .= '<td>' . $record5['Contact_No']  . '</td>';
                    $table .= '<td>' . $record5['Address']  . '</td>';
                    $table .= '<td>' . $record5['Relationship']  . '</td>';
                    $table .= '<td>' . $record5['FName']  . '</td>';
                    $table .= '<td>' . $record5['LName']  . '</td>';*/

                    $table .= '</tr>';
                }
                echo $table;
                $table .= '</table>';
            }
        ?>   

</body>
</html>
