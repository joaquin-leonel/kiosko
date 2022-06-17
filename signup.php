<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['name']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (name, password) VALUES (:name, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $_POST['name']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <div class="d-flex justify-content-center userBox"> 
      <div> 
        <h1>Crear Usuario</h1>
        <span>o <a href="login.php">logearse</a></span>

        <form action="signup.php" method="POST">
          <input name="name" type="text" placeholder="Enter your name">
          <input name="password" type="password" placeholder="Enter your Password">
          <input name="confirm_password" type="password" placeholder="Confirm Password">
          <input type="submit" value="Crear Usuario">
        </form>
      </div>
    </div>
  </body>
</html>
