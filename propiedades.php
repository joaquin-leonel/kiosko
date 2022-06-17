
<?php
include 'readPropiedades.php';
include './partials/header.php';
include 'config.php';
?>



  <div class="col-xs-12 col-md-12 col-sm-12 p-4 bgInicioKiosko">
      <h1 class="TituloH1">PROPIEDADES</h1>
      <h2 class="TituloH2">Encuentra tu propiedad tanto para la compra como para la venta.</h2>
          
  </div>

<div class="container-fluid">
  
  
  

  <div class="row">


    <div class="col-sm-12 d-flex justify-content-center">
      <h1>propiedades en venta y alquiler</h1>
    </div>
  </div>



    <div class="row">
                  <?php 
                        $i = 0;
                        while($rows = mysqli_fetch_assoc($result)){
                        $i++;
                      ?>
                  <!-- comienzo de card -->
                  
                  <div class="col-12 col-sm-12 col-md-12 col-lg-3 cajaProducto">
                          <article class="itemsProduct">
                            
                            <a href= "detalle.php?id=<?php echo $rows['id'];?>&token=<?php echo hash_hmac('sha1',$rows['id'],KEY_TOKEN); ?>" > <?php echo '<img class="propiedadImg" src="data:image;base64,' .base64_encode($rows['imagen']).'" alt="imagen de propiedad" >';?> 
                            
                            <div class="d-flex">
                              <h2 class="tipoPropiedad"><?php if ( $rows['tipo'] == 1) {echo"venta";} else {echo"arriendo";}; ?></h2>
                              <h2 class="estadoPropiedad"><?php if ( $rows['tipo'] == 2 && $rows['disp'] == 0) {echo"Disponible a partir del: ".$rows['dispfecha'];} ?></h2>
                            </div>
                            <h2 class="tituloDeProductoCard"><?php echo $rows['nombre']; ?></h2>	
                          
                            <p class="prodDescripCard"><?php echo $rows['descripcion']; ?></p>
                            <div class="contenedorPrecios">
                              <p class="precioDeProducto"> $ <?php echo $rows['precio']; ?></p>
                            </div>
                            <div class="d-flex">
                            <h2 class="amenitiesData"><?php echo $rows['metros']; ?> M²</h2>	<h2 class="amenitiesData"><?php echo $rows['ambientes']; ?> ambientes</h2>	
                            </div>
                          </article></a>
                        </div>
                        <!-- fin de card -->
                  <?php } ?>
            </div>


  <?php
  include './partials/footer.php';
  ?>

</div>

  
  


  
