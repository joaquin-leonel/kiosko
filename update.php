<?php
include 'update-process.php';
include './partials/header.php';
?>



<div class="container-fluid">
  
  
  

<div class="d-flex justify-content-center userBox"> 
            
    <form action="update-process.php" 
		      method="POST"
              enctype="multipart/form-data">
           <h1>Modificar una Propiedad</h1>
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
		           value="<?=$row['nombre'] ?>" >

                   <input type="text" 
		           name="id" 
		           value="<?=$row['id'] ?>" hidden >

		   </div>
            
           <div class="form-group">
		     <label for="tipo">Vivienda en:</label>
                   <select name="tipo">
                    <option value="1">Venta</option>
                    <option value="2">Arriendo</option>
                    </select>
		   </div>


           <!-- <div class="form-group">
                <label for="imagen">Ingrese Imagen 1</label>
                <input type="file" class="form-control-file" name="imagen"  id="imagen" required>
				<label for="imagen">Ingrese Imagen 2</label>
                <input type="file" class="form-control-file" name="imagen2"  id="imagen" required>
				<label for="imagen">Ingrese Imagen 3</label>
                <input type="file" class="form-control-file" name="imagen3"  id="imagen" required>
            </div> -->


            <div class="form-group">
		     <label for="precio">Precio:</label>
		     <input type="number" 
		           class="form-control" 
		           id="precio" 
		           name="precio" 
		           value="<?=$row['precio'] ?>"
		           >
		   </div>

           <div class="form-group">
		     <label for="metros">Metros cuadrados:</label>
		     <input type="number" 
		           class="form-control" 
		           id="metros" 
		           name="metros" 
		           value="<?=$row['metros'] ?>"
		          >
		   </div>

           <div class="form-group">
		     <label for="ambientes">Ambientes:</label>
		     <input type="number" 
		           class="form-control" 
		           id="ambientes" 
		           name="ambientes" 
		           value="<?=$row['ambientes']?>"
		           >
		   </div>
           
           <div class="form-group">
		     <label for="expensas">Expensas:</label>
		     <input type="number" 
		           class="form-control" 
		           id="expensas" 
		           name="expensas" 
		           value="<?=$row['expensas'] ?>"
		           >
		   </div>
            
           <div class="form-group">
		     <label for="antiguedad">Antiguedad:</label>
		     <input type="number" 
		           class="form-control" 
		           id="antiguedad" 
		           name="antiguedad" 
		           value="<?=$row['antiguedad'] ?>"
		           >
		   </div>
            
           <div class="form-group">
		     <label for="ubicacion">Ubicación:</label>
		     <input type="ubicacion" 
		           class="form-control" 
		           id="ubicacion" 
		           name="ubicacion" 
		           value="<?=$row['ubicacion'] ?>"
		          >
		   </div>

           <div class="form-group">
		     <label for="ubicacionurl">Ubicación URL:</label>
		     <input type="ubicacion" 
		           class="form-control" 
		           id="ubicacionurl" 
		           name="ubicacionurl" 
		           value="<?=$row['ubicacionurl'] ?>"
		           >
		   </div>

		   <div class="form-group">
		     <label for="descripcion">Descripción:</label>
		     <input type="descripcion" 
		           class="form-control" 
		           id="descripcion" 
		           name="descripcion" 
		           value="<?=$row['descripcion'] ?>"
		          >
		   </div>

		   <button type="submit" 
		          class="btn btn-primary"
		          name="update">Modificar Propiedad</button>
	
	    </form>



    </div>


  <?php
  include './partials/footer.php';
  ?>

</div>