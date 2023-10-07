<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Patient</title>
    <link rel="icon" href="Home/Logo.png">
    <link rel="stylesheet" href="Doctoradd.css">
    <style>
        body
        {
            background-image: url('Home/Doctor.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;  
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="header">
            <h1 class="role">Add New Patient</h1>
            <button type="button" class="button">
                <a href="Doctor.php" class="Back"> Back </a>
            </button>
        </div>
        <div class="addform">
            <form action="connectiondb.php" method="post" class="userform">
                <div class="addform1" >
                    <h1>Patient Details</h1>
                    <p>
                        <label for="">PatientID</label> &emsp; &emsp; &emsp;
                        <input type="text" name="Patient_ID" required>
                    </p>

                    <p>
                        <label for="">Doctor DEA No</label>                                                                                                                                 &nbsp; &nbsp; 
                        <input type="text" name="DEA_NO" required>
                    </p>


                    <p>
                        <label for="">Name</label>                                                                                                                                          &emsp; &emsp; &emsp; &nbsp; &nbsp; &thinsp;
                        <input type="text" name="Patient_Name" required>
                    </p>

                    <p>
                        <label for="">Date of Birth</label>                                                                                                                                 &emsp; &nbsp; &nbsp;
                        <input type="text" name="BirthDate" required>
                    </p>
                </div>   
            
                <div class="addform2">
                    <h1>Emergency Contact Details</h1>
                    <p>
                        <label for="">First name</label>                                                                                                                                   &emsp; &emsp; &emsp; &emsp; &emsp; 
                        <input type="text" name="FName" required>
                    </p>

                    <p>
                        <label for="">Last Name</label>                                                                                                                                    &emsp; &emsp; &emsp; &emsp; &emsp; 
                        <input type="text" name="LName" required>
                    </p>

                    <p>
                        <label for="">Contact Number</label>                                                                                                                               &emsp; &emsp; &emsp; 
                        <input type="text" name="Contact_No" required>
                    </p>

                    <p>
                        <label for="">Relationship </label>                                                                                                                                &emsp; &emsp; &emsp; &emsp; &thinsp;
                        <input type="text" name="Relationship" required>
                    </p>

                    <p>
                        <label for=>Address</label>                                                                                                                                        &emsp; &emsp; &emsp; &emsp; &emsp; &thinsp; &thinsp;
                        <input type="text" name="EAddress" required>
                    </p>
                </div>    

                <div class="addform3">
                    <h1>Insurance Information</h1>
                    <p>
                        <label for="">Company name</label>                                                                                                                                 &emsp; &emsp; 
                        <input type="text" name="Company_Name" >
                    </p>

                    <p>
                        <label for="">Branch name</label>                                                                                                                                  &emsp; &emsp;  &nbsp; &nbsp;
                        <input type="text" name="Branch_Name" >
                    </p>

                    <p>
                        <label for="">Address</label>                                                                                                                                      &emsp; &emsp; &emsp; &emsp; &nbsp;
                        <input type="text" name="Branch_Address" >  
                    </p>

                    <p>
                        <label for=""> Contact Number </label>                                                                                                                             &emsp; &nbsp; &nbsp;
                        <input type="text" name="Branch_ContactNo" >
                    </p>
                </div>    
            
                <div class="addform4">
                    <h1>Subscriber Details</h1>
                    <p>
                        <label for="">First Name</label>                                                                                                                                  &emsp; &emsp; &emsp; &thinsp;
                        <input type="text" name="SFName" >
                    </p>

                    <p>
                        <label for="">Last Name</label>                                                                                                                                   &emsp; &emsp; &emsp; &thinsp;
                        <input type="text" name="SLName" >
                    </p>

                    <p>
                        <label for="">Relationship</label>                                                                                                                               &nbsp; &emsp; &emsp; &thinsp;
                        <input type="text" name="SRelationship" >
                    </p>

                    <p>
                        <label for="">Contact Number</label>                                                                                                                              &emsp; &nbsp; 
                        <input type="text" name="SContact_No" >
                    </p>

                    <p>
                        <label for=> Address</label>                                                                                                                                      &emsp; &emsp; &emsp; &emsp;
                        <input type="text" name="Saddress" >
                    </p>
            </div>  
                <button type="submit" value="submit" class="save">Save</button>  
            </form>     
        </div>
</body>
</html>
