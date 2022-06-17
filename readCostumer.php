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
include "readCostumber-process.php";

?>


<?php
include './partials/header.php';
?>



<div class="container-fluid">

<div class="col-sm-12 d-flex justify-content-center mt-4">
<h1>Visualizar Clientes</h1>
</div>


<div class="col-sm-12 d-flex justify-content-center mt-4">
<img class="imgServicios"src="./img/viewCostumerImg.svg" alt="Propiedades Kiosko Inmobiliario">
</div>

<div class="col-sm-12 d-flex justify-content-center mt-5 boxServicios">
        

        <div class="buttonBox">
            <a href="home.php">
            <button type="button" class="btn btn-danger btn-lg btnMas">Menu Principal</button>
            </a>
        </div>

        <div class="buttonBox">
            <a href="altaClientes.php">
            <button type="button" class="btn btn-danger btn-lg btnMas">Cargar clientes</button>
            </a>
        </div>

        <div>
            <a href="logout.php">
            <button type="button" class="btn btn-danger btn-lg  btnMas">LogOut</button>
            </a>
        </div>    
</div>


    <div class="d-flex justify-content-center userBox">
       
    
        <?php if (mysqli_num_rows($result)) { ?>
        <table class="table table-striped table-responsive-stack">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Propietario</th>
            <th scope="col">Dirección</th> 
            <th scope="col">Area</th> 
            <th scope="col">Habitaciones</th> 
            <th scope="col">Baños</th> 
            <th scope="col">Apto</th> 
            <th scope="col">Admin</th> 
            <th scope="col">Canon</th> 
            <th scope="col">Parquetero</th>
            <th scope="col">Total</th>  
            <th scope="col">Inicio</th> 
            <th scope="col">Inquilino</th> 
            <th scope="col">Seguro</th> 
            <th scope="col">Valor seguro</th> 
            <th scope="col">Garage</th> 
            <th scope="col">Celular</th> 
            <th scope="col">Correo</th> 
            <th scope="col">No Contrato</th> 
            <th scope="col">Pre-Visita</th> 
            <th scope="col">Fecha termino</th> 
            <th scope="col">Paz y salvo</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $i = 0;
                while($rows = mysqli_fetch_assoc($result)){
                    $i++; 
            ?>
            <tr>
                <th scope="row"> <?=$i?> </th>
                <td> <?=$rows['propietario']?> </td>
                <td> <?php echo $rows['direccion']; ?></td>
                <td> <?php echo $rows['area']; ?></td>
                <td> <?php echo $rows['habitaciones']; ?></td>
                <td> <?php echo $rows['banios']; ?></td>
                <td> <?php echo $rows['apto']; ?></td>
                <td> <?php echo $rows['admin']; ?></td>
                <td> <?php echo $rows['canon']; ?></td>
                <td> <?php echo $rows['parquedero']; ?></td>
                <td> <?php echo $rows['total']; ?></td>
                <td> <?php echo $rows['inicio']; ?></td>
                <td> <?php echo $rows['inquilino']; ?></td>
                <td> <?php if ($rows['seguro']==1): echo 'SEGUROS MUNDIAL';elseif ($rows['seguro']==2):echo 'LIBERTADOR'; else: echo 'Sin seguro';endif; ?></td>
                <td> <?php echo $rows['vseguro']; ?></td>
                <td> <?php echo $rows['garage']; ?></td>
                <td> <?php echo $rows['celular']; ?></td>
                <td> <?php echo $rows['correo']; ?></td>
                <td> <?php echo $rows['nocontrato']; ?></td>
                <td> <?php echo $rows['fprevisita']; ?></td>
                <td> <?php echo $rows['ftermino']; ?></td>
                <td> <?php echo $rows['pazysalvo']; ?></td>
                
                <td><a href="update-clientes.php?id=<?=$rows['id']?>"><img class="crudIcon"src="./img/updateIcon.svg" alt="Actualizar"></a></td>
                <td><a href="delete-customer-process.php?id=<?=$rows['id']?>" > <img class="crudIcon"src="./img/trashIcon.svg" alt="Borrar"></a></td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
        <?php } ?>

    
    </div>
            <?php
            include './partials/footer.php';
            ?>

</div>








