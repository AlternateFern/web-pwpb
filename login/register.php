<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location: login.php");
}

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert('This Username or Password has already been taken'); </script>";
    }
    else {
        if($password == $confirmpassword){
            $query = "INSERT INTO tb_user VALUES('','$email','$username','$password')";
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
// Im so fucking tired
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form class="" action="" method="post" autocomplete="off">
        <label for="name">Username : </label>
        <input type="text" name="username" id="username" required value=""> <br>
        <label for="name">email : </label>
        <input type="text" name="email" id="email" required value=""> <br>
        <label for="name">Password : </label>
        <input type="password" name="password" id="password" required value=""> <br>
        <label for="name">Confirm Password : </label>
        <input type="password" name="confirmpassword" id="confirmpassword" required value=""> <br>
        
        <button type="submit" name="submit">Register</button>
    </form>
    <br>
    <a href="login.php">already have an account?</a>
</body>
</html>