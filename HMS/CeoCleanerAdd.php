<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Cleaner</title>
    <link rel="icon" href="Home/Logo.png">
    <link rel="stylesheet" href="CeoCleanerAdd.css">
    <style>
        body
        {
            background-image: url('Home/Cleaner.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;  
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="header">
            <h1 class="role">Add New Cleaner</h1>
            <button type="button" class="button">
                <a href="CeoAdd.php" class="Back"> Back </a>
            </button>
        </div>
        <div class="addform">
            <form action="CeoCleanerConnection.php" method="post" class="userform">
                    <h1 align="center">Cleaner Details</h1>
                    <p>
                        <label for="">Emp_ID</label>
                        <input class="box" type="text" name="Emp_ID" required>
                    </p>

                    <p>
                        <label for="">Name</label>                                                                                                                             
                        <input class="box" type="text" name="Name" required>
                    </p>


                    <p>
                        <label for="">Address</label>                                                                                                                                     
                        <input class="box" type="text" name="Address" required>
                    </p>

                    <p>
                        <label for="">Contact_No</label>                                                                                                                     
                        <input class="box" type="text" name="Contact_No" required>
                    </p>

                    <p>
                        <label for="">Working_status</label>                                                                                                                                
                        <input class="box" type="text" name="Working_status" required>
                    </p>

                    <p>
                        <label for="">Contract_No</label>                                                          
                        <input class="box" type="text" name="Contract_No" required>
                    </p>

                    <p>
                        <label for="">Contract_startDate</label>                                                                                                                                
                        <input class="box"  type="text" name="Contract_startDate" required>
                    </p>

                    <p>
                        <label for="">Contract_EndDate</label>                                                                                                                            
                        <input class="box" type="text" name="Contract_EndDate" required>
                    </p>
                    <button type="submit" value="submit" class="save">Save</button>  
                    </form>
                   
        </div>
</body>
</html>
