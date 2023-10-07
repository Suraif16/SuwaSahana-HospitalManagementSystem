<?php require_once('connection.php'); ?>
<?php

if(isset($_POST['submit'])){

    $errors = array();

  if(!isset($_POST['userrole']) || strlen(trim($_POST['userrole'])) <1){
    $errors[]='userrole is missing/ invalid';
  }
  if(!isset($_POST['password']) || strlen(trim($_POST['password'])) <1){
    $errors[]='password is missing/ invalid';
  }
  if(empty($errors)){

    $userrole = mysqli_real_escape_string($connection, $_POST['userrole']);
    $password = mysqli_real_escape_string($connection, $_POST['password']); 

    $query = "SELECT * FROM users
               WHERE user_role = '{$userrole}'
               AND password = '{$password}'";

    $result_set = mysqli_query($connection, $query);
        
        //$doc = "Doctor";
    if($result_set) {

      if(mysqli_num_rows($result_set) ==1){
        if($userrole=='Doctor'){

        header('Location: Doctor.php');}

        else if($userrole=='Nurse'){

        header('Location: Nurse.php');}

        else if($userrole=='CEO'){

        header('Location: Ceo.php');}

        else if($userrole=='Vendor'){

        header('Location: Vendor.php');}

      }else{
        $errors[]='Invalid password';
      }
    }else{
      $errors[] ='Database query is failed';
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-store" />
    <title>Home</title>
    <link rel="icon" href="Home/Logo.png">
    <link rel="stylesheet" href="Home.css">
    <style>
        body {
          background-image: url('Home/Home.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;  
          background-size: cover;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="Home/Logo.png" alt="Logo" class="logo">
        <h1 class="name">Suwa Sahana Private Hospital</h1>
        <h1 class="hms"> Hospital Management System</h1>
    </div>
    <div class="login">
    <form action="Home.php" method="post">
        <div class="container">
          <label for="uname"><b>User Role</b></label>
          <select name="userrole" id="Roles" class="userrole">
          <option value="CEO">CEO</option>
            <option value="Doctor">Doctor</option>
            <option value="Nurse">Nurse</option>
            <option value="Vendor">Vendor</option>
        </select>
          <br><br>
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>
      
          <button type="submit" name="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
      
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
      </div>
</body>
</html>
<?php mysqli_close($connection); ?>