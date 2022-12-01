<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Warung-Online</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body id="bg-login">
    <div class="=box-login">
        <h2>Login</h2>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username" class="input-control">
            <input type="password" name="password" placeholder="Password" class="input-control">
            <input type="submit" name="submit" value="Login" class="btn">
        </form>
        <?php 
 
 include 'db.php';
  
 error_reporting(0);
  
 session_start();
  
 if (isset($_SESSION['username'])) {
     header("Location: index.php");
 }
  
 if (isset($_POST['submit'])) {
     $username = $_POST['username'];
     $password = md5($_POST['password']);
  
     $sql = "SELECT * FROM tb_admin WHERE username='$username' AND password='$password'";
     $result = mysqli_query($conn, $sql);
     if ($result->num_rows > 0) {
         $row = mysqli_fetch_assoc($result);
         $_SESSION['username'] = $row['username'];
         header("Location: index.php");
     } else {
         echo "<script>alert('Nama atau password Anda salah. Silahkan coba lagi!')</script>";
     }
 }
  
 ?>
    </div>
</body>
</html>