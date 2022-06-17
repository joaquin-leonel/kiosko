<?php
include 'readPropiedades.php';
include './partials/header.php';

include 'config.php';
require 'database2.php';
$db = new Database();
$con = $db->conectar();

$id = isset($_GET['id']) ? $_GET['id'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';


if($id == '' || $token == '') {
  echo 'error al procesar al peticion';
  exit;
}else {
  $token_tmp =hash_hmac('sha1',$id, KEY_TOKEN);

  if($token == $token_tmp){

    $sql = $con->prepare("SELECT count(id) FROM propiedades WHERE id=?");
    $sql-> execute([$id]);
   
  
    if($sql->fetchColumn() > 0) {

      $sql = $con->prepare("SELECT nombre, tipo, imagen, imagen2, imagen3, precio, metros, ambientes, expensas, antiguedad, ubicacion, ubicacionurl, descripcion, disp, dispfecha FROM propiedades WHERE id=?");
      $sql-> execute([$id]);
      $row= $sql->fetch(PDO::FETCH_ASSOC);
      $nombre= $row['nombre'];
      $tipo= $row['tipo'];
      $imagen= $row['imagen'];
      $imagen2= $row['imagen2'];
      $imagen3= $row['imagen3'];
      $precio= $row['precio']; 
      $metros= $row['metros']; 
      $ambientes= $row['ambientes']; 
      $expensas= $row['expensas']; 
      $antiguedad= $row['antiguedad']; 
      $ubicacion= $row['ubicacion']; 
      $ubicacionurl= $row['ubicacionurl']; 
      $descripcion= $row['descripcion'];  
      $disp=$row['disp']; 
      $dispfecha=$row['dispfecha']; 
    }

  }else{
    echo 'error al procesar al peticion';
    exit;
  }

}
?>



<div class="container-fluid">


    <div class="row">

           
    <div class="col-md-6 order-md-1">

          
    
    <?php if ($imagen == ''){ echo '<img id="imgSlider" src=./img/imgNoDisponible.png';} else {echo '<img id="imgSlider" src="data:image;base64,' .base64_encode($imagen).'" alt="imagen de propiedad" >';}?>
      
      <div class="sliderBtnContainer">
        
        <button class="btnSlider" onclick="document.getElementById('imgSlider').src=' <?php if ($imagen == ''){echo './img/imgNoDisponible.png';} else {echo 'data:image;base64,' .base64_encode($imagen);}?>    '"></button>

        <button class="btnSlider" onclick="document.getElementById('imgSlider').src=' <?php if ($imagen2 == ''){echo './img/imgNoDisponible.png';} else {echo 'data:image;base64,' .base64_encode($imagen2);}?>    '"></button>

        <button class="btnSlider" onclick="document.getElementById('imgSlider').src=' <?php if ($imagen3 == ''){echo './img/imgNoDisponible.png';} else {echo 'data:image;base64,' .base64_encode($imagen3);}?>    '"></button>

      </div>

    </div>

        <div class="col-md-6 order-md-2 fichaContainer">

        <div class="d-flex">
          <h4 class="typeTag"> Propiedad en <?php if ( $tipo == 1) {echo"venta";} else {echo"arriendo";}; ?>    </h4>      
          <h2 class="typeTagred"><?php if ( $tipo == 2 &&  $disp == 0) {echo"Disponible a partir del: ".$dispfecha;} ?></h2>
        </div>                    

          <h2 class="tituloDetalle"> <?php echo $nombre; ?> </h2>
            <div class="d-flex iconPropsBox">

                <div class="d-flex miniIconContainer">
                 <img class="miniIcon" src="./img/mCuadradosIcon.svg" alt="icono Metros cuadrados"> <p class="typeTag"> <?php echo $metros; ?> M²</p>
                </div>

                <div class="d-flex miniIconContainer">
                  <img class="miniIcon" src="./img/ambientesIcon.svg" alt="icono Metros cuadrados"> <p class="typeTag"> <?php echo $ambientes; ?> ambientes</p>
                </div>

                 <div class="d-flex miniIconContainer">
                  <img class="miniIcon" src="./img/calendarioIcon.svg" alt="icono de antiguedad"> <p class="typeTag"> <?php echo $antiguedad; ?> años de antiguedad </p>
                </div>
                
            </div>
          
            <div class="textoDescripcion">
              <h3><strong>Descripción</strong></h3>
                  <p> <?php echo $descripcion; ?> </p>
                </div>

          <a href="https://wa.me/573024236366?text=Hola%20Kiosko%20inmobiliario%20estoy%20interesado%20en%20la%20propiedad%20<?php echo $nombre; ?>%20que%20se%20encuentra%20en%20<?php if ( $tipo == 1) {echo"venta";} else {echo"arriendo";}; ?>%20muchas%20gracias%20!"><button type="button" class="btn btn-primary btn-lg butttonContacto">
          Contactar con Kiosko
          </button></a>
        </div>
      
    </div>

    <div class="row">
        <div class="col-md-12 ">
              
            </div>
    </div>

  <?php
  include './partials/footer.php';
  ?>

</div>


