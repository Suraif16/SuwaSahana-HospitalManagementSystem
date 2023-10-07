<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor</title>
    <link rel="icon" href="Home/Logo.png">
    <link rel="stylesheet" href="Doctor.css">
    <style>
        body {
          background-image: url('Home/Doctor.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;  
          background-size: cover;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 class="role"> Doctor</h1>
        <button type="submit" class="button">
            <a href= "Home.php" class="Logout">Logout</a>
        </button>
    </div>

    <div class="buttonset">
    <button type="submit" class="button1">
            <a class="link1" href= "Doctoradd.php">Add New Patient</a>
    </button>
    <br><br><br>
    <button type="submit" class="button2">
            <a class="link2" href= "DoctorDelete.php">Delete Patient</a>
    </button>
    <br><br><br>
    <button type="submit" class="button3">
            <a class="link3" href= "DoctorView.php">View</a>
    </button>
    </div>
</body>
</html>