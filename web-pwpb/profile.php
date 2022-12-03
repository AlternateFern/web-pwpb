<?php
require 'important/config.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_admin WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | DMF Shop</title>
    <link rel="stylesheet" href="profile.css">
    <?php require 'important/bs.php'; ?>
</head>
<body>
    <?php require 'important/navbar.php' ?>
    Profile  <?php echo $row["username"]; ?>

    
</body>
</html>