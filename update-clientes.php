<?php
include 'update-clientes-process.php';
include './partials/header.php';
?>



<div class="container-fluid">
  
  
  

<div class="d-flex justify-content-center userBox"> 
            
    <form action="update-clientes-process.php" 
		      method="POST"
              enctype="multipart/form-data">
           <h1>Modificar un cliente</h1>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="propietario">Propietario:</label>
		     <input type="propietario" 
		           class="form-control" 
		           id="propietario" 
		           name="propietario" 
		           value="<?=$row['propietario'] ?>" >

                   <input type="text" 
		           name="id" 
		           value="<?=$row['id'] ?>" hidden >

		   </div>

		   <div class="form-group">
		     <label for="direccion">Dirección:</label>
		     <input type="direccion" 
		           class="form-control" 
		           id="direccion" 
		           name="direccion" 
		           value="<?=$row['direccion'] ?>">
		   </div>


		   <div class="form-group">
		     <label for="area">Area:</label>
		     <input type="area" 
		           class="form-control" 
		           id="area" 
		           name="area" 
		           value="<?=$row['area'] ?>">
		   </div>

		 


           <div class="form-group">
		     <label for="tipo">Habitaciones:</label>
                   <select name="habitaciones">
                    <option value="1">1</option>
                    <option value="2">2</option>
					<option value="3">3</option>
                    <option value="4">4</option>
					<option value="5">5</option>
                    <option value="6">6</option>
					<option value="7">7</option>
                    <option value="8">8</option>
					<option value="9">9</option>
                    <option value="10">10</option>
                    </select>
		   </div>


		   <div class="form-group">
		     <label for="banios">Baños:</label>
                   <select name="banios">
                    <option value="1">1</option>
                    <option value="2">2</option>
					<option value="3">3</option>
                    <option value="4">4</option>
					<option value="5">5</option>
                    <option value="6">6</option>
					<option value="7">7</option>
                    <option value="8">8</option>
					<option value="9">9</option>
                    <option value="10">10</option>
                    </select>
		   </div>



            <div class="form-group">
		     <label for="apto">Apto:</label>
		     <input type="number" 
		           class="form-control" 
		           id="apto" 
		           name="apto" 
		           value="<?=$row['apto'] ?>">
		   </div>

		   <div class="form-group">
		     <label for="admin">Admin:</label>
		     <input type="number" 
		           class="form-control" 
		           id="admin" 
		           name="admin" 
		           value="<?=$row['admin'] ?>">
		   </div>

		   
		   <div class="form-group">
		     <label for="canon">Canon:</label>
		     <input type="number" 
		           class="form-control" 
		           id="canon" 
		           name="canon" 
		           value="<?=$row['canon'] ?>">
		   </div>


		      
		   <div class="form-group">
		     <label for="parquedero">Parquero:</label>
		     <input type="number" 
		           class="form-control" 
		           id="parquedero" 
		           name="parquedero" 
		           value="<?=$row['parquedero'] ?>">
		   </div>


		   <div class="form-group">
		     <label for="total">Total:</label>
		     <input type="number" 
		           class="form-control" 
		           id="total" 
		           name="total" 
		           value="<?=$row['total'] ?>">
		   </div>


		   <div class="form-group">
		     <label for="inicio">Inicio:</label>
		     <input type="inicio" 
		           class="form-control" 
		           id="inicio" 
		           name="inicio" 
		           value="<?=$row['inicio'] ?>">
		   </div>
		   

		   <div class="form-group">
		     <label for="inquilino">Inquilino:</label>
		     <input type="inquilino" 
		           class="form-control" 
		           id="inquilino" 
		           name="inquilino" 
		           value="<?=$row['inquilino'] ?>">
		   </div>


		   <div class="form-group">
		     <label for="seguro">Seguro:</label>
                   <select name="seguro">
                    <option value="1">SEGUROS MUNDIAL</option>
                    <option value="2">LIBERTADOR</option>
					<option value="3">Sin Seguro</option>
                    </select>
		   </div>

		   <div class="form-group">
		     <label for="vseguro">Valor seguro:</label>
		     <input type="number" 
		           class="form-control" 
		           id="vseguro" 
		           name="vseguro" 
		           value="<?=$row['vseguro'] ?>">
		   </div>


		   <div class="form-group">
		     <label for="garage">Garage:</label>
		     <input type="number" 
		           class="form-control" 
		           id="garage" 
		           name="garage" 
		           value="<?=$row['garage'] ?>">
		   </div>


		   <div class="form-group">
		     <label for="celular">Celular:</label>
		     <input type="number" 
		           class="form-control" 
		           id="celular" 
		           name="celular" 
		           value="<?=$row['celular'] ?>">
		   </div>

		   <div class="form-group">
		     <label for="correo">Correo:</label>
		     <input type="correo" 
		           class="form-control" 
		           id="correo" 
		           name="correo" 
		           value="<?=$row['correo'] ?>">
		   </div>

		   <div class="form-group">
		     <label for="nocontrato">N Contrato:</label>
		     <input type="number" 
		           class="form-control" 
		           id="nocontrato" 
		           name="nocontrato" 
		           value="<?=$row['nocontrato'] ?>">
		   </div>

		   <div class="form-group">
		     <label for="fprevisita">Pre-visita:</label>
		     <input type="fprevisita" 
		           class="form-control" 
		           id="fprevisita" 
		           name="fprevisita" 
		           value="<?=$row['fprevisita'] ?>">
		   </div>

		   <div class="form-group">
		     <label for="ftermino">Fecha termino:</label>
		     <input type="ftermino" 
		           class="form-control" 
		           id="ftermino" 
		           name="ftermino" 
		           value="<?=$row['ftermino'] ?>">
		   </div>

		   <div class="form-group">
		     <label for="pazysalvo">Paz y salvo:</label>
		     <input type="pazysalvo" 
		           class="form-control" 
		           id="pazysalvo" 
		           name="pazysalvo" 
		           value="<?=$row['pazysalvo'] ?>">
		   </div>



		   <button type="submit" 
		          class="btn btn-primary"
		          name="updateclientes">Modificar Propiedad</button>
	
	    </form>



    </div>


  <?php
  include './partials/footer.php';
  ?>

</div>