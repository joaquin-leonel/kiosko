<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, name, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kiosko Inmobiliario - Panel de administrador</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>


    <div class="container-fluid">
  
  
  

      <div class="row">
          <div class="col-sm-12 d-flex justify-content-center mb-5  ">
              <h2 class=" mt-4 titularClass">Panel de Administrador</h2>
              </div>

              <div class="col-sm-12 d-flex justify-content-center mt-3 mb-5">
              <?php if(!empty($user)): ?>
                  <h2>Hola <strong> <?= $user['name']; ?></strong>, bienvenido al panel de administrador.</h2>

              </div>
          </div>
      </div>

        
        <div class="row container-fluid mt-5">
          <div class="col-sm-6 d-flex justify-content-center boxServicios">
            <section>  
            <a href="altapropiedades.php">  
            <img class="imgServicios" src="./img/uploadImg.svg" alt="">
              <h2 class=" mt-6 tituloBeneficio">Cargar propiedades</h2>  </a>  
            </section>
          </div>
          
          <div class="col-sm-6 d-flex justify-content-center boxServicios">
            <section>  
              <a href="read.php">
              <img class="imgServicios" src="./img/viewImg.svg" alt="">
              <h2 class=" mt-6 tituloBeneficio">Ver propiedades</h2> 
              </a>
            </section>
          </div>
          


          <div class="row container-fluid mt-5">
          <div class="col-sm-6 d-flex justify-content-center boxServicios">
            <section>  
            <a href="altaClientes.php">  
            <img class="imgServicios" src="./img/altaCustomerImg.svg" alt="">
              <h2 class=" mt-6 tituloBeneficio">Cargar Clientes</h2>  </a>  
            </section>
          </div>
          
          <div class="col-sm-6 d-flex justify-content-center boxServicios">
            <section>  
              <a href="readCostumer.php">
              <img class="imgServicios" src="./img/viewCostumerImg.svg" alt="">
              <h2 class=" mt-6 tituloBeneficio">Ver Clientes</h2> 
              </a>
            </section>
          </div>



          <div class="col-sm-12 d-flex justify-content-center mt-5 boxServicios">
              <a href="logout.php">
              <button type="button" class="btn btn-danger btn-lg btn-block btnMas">LogOut</button>
              </a>
          </div>
        </div>
            
        <?php else: ?>
                  <h2>Por favor <a href="login.php">Logéese para ingresar.</a> o  <a href="signup.php">Cree nuevo usuario</a> </h2>
              <?php endif; ?>

    </div>
              <?php
            include './partials/footer.php';
            ?>


  </body>
</html>
