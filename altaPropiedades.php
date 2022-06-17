
<?php 
session_start();
 ?>

<?php
	 require 'database.php';


if (isset( $_SESSION['user_name'])) {
$name=$_SESSION['user_name'];
$id=$_SESSION['user_id'];
}else{

    header("location:denegado.php");
}

?>


<?php
include 'readPropiedades.php';
include './partials/header.php';
?>



<div class="container-fluid">
  
<div class="col-sm-12 d-flex justify-content-center mt-4">
<h1>Crear nueva Propiedad</h1>
</div>

<div class="col-sm-12 d-flex justify-content-center mt-4">
<img class="imgServicios"src="./img/addHouseImg.svg" alt="Usuarios Kiosko Inmobiliario">
</div>



<div class="col-sm-12 d-flex justify-content-center mt-5 boxServicios">
        

		<div class="buttonBox">
            <a href="home.php">
            <button type="button" class="btn btn-danger btn-lg btnMas">Menu Principal</button>
            </a>
        </div>
		
        <div class="buttonBox">
            <a href="read.php">
            <button type="button" class="btn btn-danger btn-lg btnMas">Ver Propiedades</button>
            </a>
        </div>

        <div class="buttonBox">
            <a href="logout.php">
            <button type="button" class="btn btn-danger btn-lg  btnMas">LogOut</button>
            </a>
        </div>    
</div>


  

<div class="d-flex justify-content-center userBox"> 
            
    <form action="altaPropiedades-process.php" 
		      method="POST"
              enctype="multipart/form-data">
           
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="nombre">Título:</label>
		     <input type="nombre" 
		           class="form-control" 
		           id="nombre" 
		           name="nombre" 
		           value="<?php if(isset($_GET['nombre']))
		                           echo($_GET['nombre']); ?>" 
		           placeholder="Ingrese Título" required>
		   </div>
            
           <div class="form-group">
		     <label for="tipo">Vivienda en:</label>
                   <select name="tipo">
                    <option value="1">Venta</option>
                    <option value="2">Arriendo</option>
                    </select>
		   </div>


		   <div class="form-group">
		     <label for="disp">Disponibilidad arriendo:</label>
                   <select name="disp">
                    <option value="0">No Disponible</option>
                    <option value="1">Disponible</option>
                    </select>
		   </div>

			
		   <div class="form-group">
		     <label for="dispfecha">Fecha Disponibilidad:</label>
		     <input type="dispfecha" 
		           class="form-control" 
		           id="dispfecha" 
		           name="dispfecha" 
		           value="<?php if(isset($_GET['dispfecha']))
		                           echo($_GET['dispfecha']); ?>"
		           placeholder="fecha de disponibilidad de arriendo"required>
		   </div>


           <div class="form-group">
                <label for="imagen">Ingrese Imagen 1</label>
                <input type="file" class="form-control-file" name="imagen"  id="imagen" required>
				<label for="imagen">Ingrese Imagen 2</label>
                <input type="file" class="form-control-file" name="imagen2"  id="imagen" required>
				<label for="imagen">Ingrese Imagen 3</label>
                <input type="file" class="form-control-file" name="imagen3"  id="imagen" required>
            </div>


            <div class="form-group">
		     <label for="precio">Precio:</label>
		     <input type="number" 
		           class="form-control" 
		           id="precio" 
		           name="precio" 
		           value="<?php if(isset($_GET['precio']))
		                           echo($_GET['precio']); ?>"
		           placeholder="Ingrese precio" required>
		   </div>

           <div class="form-group">
		     <label for="metros">Metros cuadrados:</label>
		     <input type="number" 
		           class="form-control" 
		           id="metros" 
		           name="metros" 
		           value="<?php if(isset($_GET['metros']))
		                           echo($_GET['metros']); ?>"
		           placeholder="Ingrese metros cuadrados" required>
		   </div>

           <div class="form-group">
		     <label for="ambientes">Ambientes:</label>
		     <input type="number" 
		           class="form-control" 
		           id="ambientes" 
		           name="ambientes" 
		           value="<?php if(isset($_GET['ambientes']))
		                           echo($_GET['ambientes']); ?>"
		           placeholder="Ingrese numero de ambientes" required>
		   </div>
           
           <div class="form-group">
		     <label for="expensas">Expensas:</label>
		     <input type="number" 
		           class="form-control" 
		           id="expensas" 
		           name="expensas" 
		           value="<?php if(isset($_GET['expensas']))
		                           echo($_GET['expensas']); ?>"
		           placeholder="Ingrese precio de expensas" required>
		   </div>
            
           <div class="form-group">
		     <label for="antiguedad">Antiguedad:</label>
		     <input type="number" 
		           class="form-control" 
		           id="antiguedad" 
		           name="antiguedad" 
		           value="<?php if(isset($_GET['antiguedad']))
		                           echo($_GET['antiguedad']); ?>"
		           placeholder="Ingrese años de antiguedad" required>
		   </div>
            
           <div class="form-group">
		     <label for="ubicacion">Ubicación:</label>
		     <input type="ubicacion" 
		           class="form-control" 
		           id="ubicacion" 
		           name="ubicacion" 
		           value="<?php if(isset($_GET['ubicacion']))
		                           echo($_GET['ubicacion']); ?>"
		           placeholder="Ingrese la ubicación" required>
		   </div>

           <div class="form-group">
		     <label for="ubicacionurl">Ubicación URL:</label>
		     <input type="ubicacion" 
		           class="form-control" 
		           id="ubicacionurl" 
		           name="ubicacionurl" 
		           value="<?php if(isset($_GET['ubicacionurl']))
		                           echo($_GET['ubicacionurl']); ?>"
		           placeholder="Ingrese la URL de la ubicación" required>
		   </div>

		   <div class="form-group">
		     <label for="descripcion">Descripción:</label>
		     <input type="descripcion" 
		           class="form-control" 
		           id="descripcion" 
		           name="descripcion" 
		           value="<?php if(isset($_GET['descripcion']))
		                           echo($_GET['descripcion']); ?>"
		           placeholder="Ingrese descripción"required>
		   </div>

		   <button type="submit" 
		          class="btn btn-primary"
		          name="create">Crear Propiedad</button>
		    <!-- <a href="read.php" class="link-primary">View</a> -->
	    </form>



    </div>


  <?php
  include './partials/footer.php';
  ?>

</div>

  








