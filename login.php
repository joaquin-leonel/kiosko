<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /php-login');
  }
  require 'database.php';

  if (!empty($_POST['name']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, name, password FROM users WHERE name = :name');
    $records->bindParam(':name', $_POST['name']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      $_SESSION['user_name'] = $results['name'];
      header("Location: ./home.php");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
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
        <h1>Ingresar</h1>
        <span>o <a href="signup.php">crear usuario</a></span>

        <form action="login.php" method="POST">
          <input name="name" type="text" placeholder="Enter your name">
          <input name="password" type="password" placeholder="Enter your Password">
          <input type="submit" value="Ingresar">
        </form>
      </div>
    </div>
  </body>
</html>
