
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
include 'readClientes.php';
include './partials/header.php';
?>



<div class="container-fluid">
  
<div class="col-sm-12 d-flex justify-content-center mt-4">
<h1>Crear un nuevo Cliente</h1>
</div>


<div class="col-sm-12 d-flex justify-content-center mt-4">
<img class="imgServicios"src="./img/altaCustomerImg.svg" alt="Propiedades Kiosko Inmobiliario">
</div>

<div class="col-sm-12 d-flex justify-content-center mt-5 boxServicios">
        

        <div class="buttonBox">
            <a href="home.php">
            <button type="button" class="btn btn-danger btn-lg btnMas">Menu Principal</button>
            </a>
        </div>

        <div class="buttonBox">
            <a href="readCostumer.php">
            <button type="button" class="btn btn-danger btn-lg btnMas">ver clientes</button>
            </a>
        </div>

        <div>
            <a href="logout.php">
            <button type="button" class="btn btn-danger btn-lg  btnMas">LogOut</button>
            </a>
        </div>    
</div>




    

<div class="d-flex justify-content-center userBox"> 
            
    <form action="altaClientes-process.php" 
		      method="POST"
              enctype="multipart/form-data">
          
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
		           value="<?php if(isset($_GET['propietario']))
		                           echo($_GET['propietario']); ?>" 
		           placeholder="Ingrese nombre de propietario" required>
		   </div>
            

		   <div class="form-group">
		     <label for="direccion">Dirección:</label>
		     <input type="direccion" 
		           class="form-control" 
		           id="direccion" 
		           name="direccion" 
		           value="<?php if(isset($_GET['direccion']))
		                           echo($_GET['direccion']); ?>" 
		           placeholder="Ingrese la dirección" required>
		   </div>
			

		   <div class="form-group">
		     <label for="area">Area:</label>
		     <input type="area" 
		           class="form-control" 
		           id="area" 
		           name="area" 
		           value="<?php if(isset($_GET['area']))
		                           echo($_GET['area']); ?>" 
		           placeholder="Ingrese el area" required>
		   </div>


           <div class="form-group">
		     <label for="habitaciones">Cantidad de Habitaciones:</label>
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
		     <label for="banios">Cantidad de Baños:</label>
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
		           value="<?php if(isset($_GET['apto']))
		                           echo($_GET['apto']); ?>" 
		           placeholder="Ingrese el apto" required>
		   </div>
		
		   <div class="form-group">
		     <label for="admin">Admin:</label>
		     <input type="number"
		           class="form-control" 
		           id="admin" 
		           name="admin" 
		           value="<?php if(isset($_GET['admin']))
		                           echo($_GET['admin']); ?>" 
		           placeholder="Ingrese el admin" required>
		   </div>

		   <div class="form-group">
		     <label for="canon">Canon:</label>
		     <input type="number"
		           class="form-control" 
		           id="canon" 
		           name="canon" 
		           value="<?php if(isset($_GET['canon']))
		                           echo($_GET['canon']); ?>" 
		           placeholder="Ingrese el canon" required>
		   </div>

		   <div class="form-group">
		     <label for="parquedero">Parquedero:</label>
		     <input type="number"
		           class="form-control" 
		           id="parquedero" 
		           name="parquedero" 
		           value="<?php if(isset($_GET['parquedero']))
		                           echo($_GET['parquedero']); ?>" 
		           placeholder="Ingrese el parquedero" required>
		   </div>

		   <div class="form-group">
		     <label for="total">Total:</label>
		     <input type="number"
		           class="form-control" 
		           id="total" 
		           name="total" 
		           value="<?php if(isset($_GET['total']))
		                           echo($_GET['total']); ?>" 
		           placeholder="Ingrese el total" required>
		   </div>

		   <div class="form-group">
		     <label for="inicio">Inicio:</label>
		     <input type="inicio" 
		           class="form-control" 
		           id="inicio" 
		           name="inicio" 
		           value="<?php if(isset($_GET['inicio']))
		                           echo($_GET['inicio']); ?>" 
		           placeholder="Ingrese el inicio" required>
		   </div>

		   <div class="form-group">
		     <label for="inquilino">Inquilino:</label>
		     <input type="inquilino" 
		           class="form-control" 
		           id="inquilino" 
		           name="inquilino" 
		           value="<?php if(isset($_GET['inquilino']))
		                           echo($_GET['inquilino']); ?>" 
		           placeholder="Ingrese el inquilino" required>
		   </div>

		   <div class="form-group">
		     <label for="seguro">Nombre de seguro:</label>
                   <select name="seguro">
                    <option value="1">SEGUROS MUNDIAL</option>
                    <option value="2">LIBERTADOR</option>
					<option value="3">Sin Seguro</option>
                    </select>
		   </div>

		   <div class="form-group">
		     <label for="vseguro">Valor de Seguro:</label>
		     <input type="vseguro"
		           class="form-control" 
		           id="vseguro" 
		           name="vseguro" 
		           value="<?php if(isset($_GET['vseguro']))
		                           echo($_GET['vseguro']); ?>" 
		           placeholder="Ingrese el valor de seguro" required>
		   </div>


		   <div class="form-group">
		     <label for="garage">Garage:</label>
		     <input type="garage" 
		           class="form-control" 
		           id="garage" 
		           name="garage" 
		           value="<?php if(isset($_GET['garage']))
		                           echo($_GET['garage']); ?>" 
		           placeholder="Ingrese el garage" required>
		   </div>


		   <div class="form-group">
		     <label for="celular">Celular:</label>
		     <input type="number"
		           class="form-control" 
		           id="celular" 
		           name="celular" 
		           value="<?php if(isset($_GET['celular']))
		                           echo($_GET['celular']); ?>" 
		           placeholder="Ingrese celular" required>
		   </div>


		   <div class="form-group">
		     <label for="correo">Correo:</label>
		     <input type="email" 
		           class="form-control" 
		           id="correo" 
		           name="correo" 
		           value="<?php if(isset($_GET['correo']))
		                           echo($_GET['correo']); ?>" 
		           placeholder="Ingrese el correo" required>
		   </div>


		   <div class="form-group">
		     <label for="nocontrato">Numero de contrato:</label>
		     <input type="number"
		           class="form-control" 
		           id="nocontrato" 
		           name="nocontrato" 
		           value="<?php if(isset($_GET['nocontrato']))
		                           echo($_GET['nocontrato']); ?>" 
		           placeholder="Ingrese numero de contrato" required>
		   </div>

		   <div class="form-group">
		     <label for="fprevisita">Fecha pre-visita:</label>
		     <input type="fprevisita" 
		           class="form-control" 
		           id="fprevisita" 
		           name="fprevisita" 
		           value="<?php if(isset($_GET['fprevisita']))
		                           echo($_GET['fprevisita']); ?>" 
		           placeholder="Ingrese el fprevisita" required>
		   </div>
		   
		   <div class="form-group">
		     <label for="ftermino">Fecha de termino:</label>
		     <input type="ftermino" 
		           class="form-control" 
		           id="ftermino" 
		           name="ftermino" 
		           value="<?php if(isset($_GET['ftermino']))
		                           echo($_GET['ftermino']); ?>" 
		           placeholder="Ingrese fecha de termino" required>
		   </div>

		   <div class="form-group">
		     <label for="pazysalvo">Paz y salvo:</label>
		     <input type="pazysalvo" 
		           class="form-control" 
		           id="pazysalvo" 
		           name="pazysalvo" 
		           value="<?php if(isset($_GET['pazysalvo']))
		                           echo($_GET['pazysalvo']); ?>" 
		           placeholder="Ingrese paz y salvo" required>
		   </div>


		   <button type="submit" 
		          class="btn btn-primary"
		          name="createcliente">Crear cliente</button>
		    <!-- <a href="read.php" class="link-primary">View</a> -->
	    </form>



    </div>


  <?php
  include './partials/footer.php';
  ?>

</div>

  








