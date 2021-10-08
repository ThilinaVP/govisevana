<?php


    include_once("../../db/db.php");
    session_start();
    unset($_SESSION['email']);
    if (isset($_POST['but_submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $name;

        $sql = "SELECT email,password,name FROM buyer WHERE email='$email' AND password='$password'";
        $result = mysqli_query($con, $sql);

        // get the name from db
        while ($row = mysqli_fetch_assoc($result)) { 
          $name = $row["name"]; 
        }   

        if (mysqli_num_rows($result) > 0) {
            $_SESSION['email'] = $email;
            $_SESSION['catagory'] = 'buyer';
            $_SESSION['name'] = $name;
            header("Location: ../../index.php");
            exit();
        } else {
            echo '<script> window.alert("Incorrect Username or password");</script>';
            header("Location: buyerLogin.php");
            exit();
        }

        mysqli_close($con);
    }

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" type="text/css" href="../../css/styleLogin.css">
  </head>
    <body>
      <h1 class="title">Login as a buyer</h1>
      <div class="loginbox">
        <div class="cover">
          <img src="../../assets/img/logo.png" >
        </div>
        <h2>Welcome back</h2>
        <h1>Log into Govisevana</h1>
        <h3>Enter your email and password below</h3>

        <form class="" action="" method="post">
          <p>EMAIL</p>
          <input type="text" name="email" placeholder="email" placeholder="Email address">
          <p>Password</p>
          <input type="password" name="password" placeholder="Password" value="Login">
    <br>
          <input type="submit" name="but_submit" value="Login" id= "but_submit">
    <br>
          <h5><a href="#">Forgot password</a><h5>
        <br>
        <table>
          <tr>
            <th><h4>Don't have an account?</h4></th>
            <th><h5><a href="../selectAccType.php">Sign up</a><h5></th>
          </tr>
        </table>
        </form>
    </div>
    </body>
</html>
