<?php
require 'important/config.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_admin WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}

else {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <?php require 'important/bs.php'; ?>
    <title>Home | DMF Shop</title>
</head>
<body>
      <!-- navbar -->
      <?php require 'important/navbar.php'; ?>

      <div class="">
      <h1>Welcome, <?php echo $row["username"]; ?></h1>
      <p style="font-size:20px;font-weight: bold;opacity: 50%;">Shopping center</p>
      <!-- card -->
      <div class="container">
      <div class="card" style="width: 18rem;">
      <img src="https://cdn.discordapp.com/attachments/744035173229789257/1045609804472786954/evade.png" class="card-img-top" alt="...">
      <div class="card-body">
      <h5 class="card-title">Content</h5>
      <a href="#" class="btn btn-primary">View</a>
      </div>
  </div>
</div>
</body>
</html>