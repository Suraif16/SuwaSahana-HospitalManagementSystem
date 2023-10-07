<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurse</title>
    <link rel="icon" href="Home/Logo.png">
    <link rel="stylesheet" href="Nurse.css">
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
        <h1 class="role"> Nurse</h1>
        <button type="button" class="button">
            <a href="Home.php" class="Logout"> Logout </a>
        </button>
    </div>
    <div class="buttonset">
    <button type="submit" class="button1">
            <a class="link1" href= "NurseAdd.php">Add New Record</a>
    </button>
    <br><br><br>
    <button type="submit" class="button2">
            <a class="link2" href= "NurseDelete.php">Delete Record</a>
    </button>
    <br><br><br>
    <button type="submit" class="button3">
            <a class="link3" href= "NurseUpdate.php">Update Record</a>
    </button>
    <br><br><br>
    <button type="submit" class="button4">
            <a class="link4" href= "NurseView.php">View Record</a>
    </button>
    </div>

</body>
</html>