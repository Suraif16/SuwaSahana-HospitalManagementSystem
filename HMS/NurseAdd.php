<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Record</title>
    <link rel="icon" href="Home/Logo.png">
    <link rel="stylesheet" href="NurseAdd.css">
    <style>
        body {
          background-image: url('Home/Nurse.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;  
          background-size: cover;
        }
    </style>
</head>
<body>
    <div class="header">
            <h1 class="role">Add New Record</h1>
            <button type="button" class="button">
                <a href="Nurse.php" class="Back"> Back </a>
            </button>
        </div>
        <div class="addform">
        <form action="connectionNursedb.php" method="post" class="userform">
            <div class="addform1" >
                
                <p>
                    <label for="">PatientID</label>                                                                                                                              &emsp; &emsp; &emsp;
                    <input type="text" name="Patient_ID" required>
                </p>

                <p>
                    <label for="">RegiseredID</label>                                                                                                                             &emsp; &emsp;
                    <input type="text" name="Registered_ID" required>
                </p>


                <p> 
                    <label for="">Weight</label>                                                                                                                                  &emsp; &emsp; &emsp; &nbsp; &thinsp;
                    <input type="text" name="Weight" required>
                </p>

                <p>
                    <label for="">Bloodpressure</label>                                                                                                                          &emsp; &thinsp;
                    <input type="text" name="Blood_Pressure" required>
                </p>

                <p>
                    <label for="">Pulse</label>                                                                                                                                  &emsp; &emsp; &emsp; &nbsp; &nbsp; &nbsp;
                    <input type="text" name="Pulse" required>
                </p>

                <p>
                    <label for="">Temperature</label>                                                                                                                            &emsp;  &nbsp; &nbsp; 
                    <input type="text" name="Temperature" required>
                </p>
                </form>
                <button type="submit" value="submit" class="save">Save</button>
             </div>   
             
        </div>
</body>
</html>
