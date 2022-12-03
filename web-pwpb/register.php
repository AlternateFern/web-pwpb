<?php
require 'important/config.php';
if(!empty($_SESSION["id"])){
    header("Location: login.php");
}

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert('This Username or Password has already been taken'); </script>";
    }
    else {
        if($password == $confirmpassword){
            $query = "INSERT INTO tb_admin VALUES('','$email','$username','$password')";
            mysqli_query($conn,$query);
            echo
            "<script> alert('Register Success'); </script>";
        }
        else {
            echo
            "<script> alert('Password does not match!') </script>";
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
    <title>Register | DMF Shop</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body id="bg-login">
    <div class="box-login">
    <h2>Register</h2>
    <form class="" action="" method="post" autocomplete="off">
        <input type="text" name="username" id="username" placeholder="username" class="input-control" required value=""> <br>
        <input type="text" name="email" id="email" placeholder="email" class="input-control" required value=""> <br>
        <input type="password" name="password" id="password" placeholder="password" class="input-control" required value=""> <br>
        <input type="password" name="confirmpassword" id="confirmpassword" class="input-control" placeholder="confirmpassword" required value=""> <br>
        <button type="submit" name="submit" class="btn">Register</button>
    </form>
    <br>
    <a href="login.php">Already have an account?</a>
    </div>
</body>
</html>