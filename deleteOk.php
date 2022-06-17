<?php
require 'database.php';
  session_start();

  if (isset($_SESSION['user_id'])) {
    // header('Location: /php-login');
    echo $_SESSION['user_id'];
  }else{
    header("location:denegado.php");
  }
  ?>

<?php
include './partials/header.php';
?>



  <div class="col-xs-12 col-md-12 col-sm-12 p-4 bgInicioKiosko">
      <h1 class="TituloH1">Borrado con Exito!</h1>
     
          
  </div>

<div class="container-fluid">
  
  
  

  <?php
  include './partials/footer.php';
  ?>

</div>