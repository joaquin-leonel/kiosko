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
include "read-process.php";

?>


<?php
include './partials/header.php';
?>



<div class="container-fluid">

<div class="col-sm-12 d-flex justify-content-center mt-4">
<h1>Visualizar Propiedades</h1>
</div>


<div class="col-sm-12 d-flex justify-content-center mt-4">
<img class="imgServicios"src="./img/HouseImg.svg" alt="Propiedades Kiosko Inmobiliario">
</div>

<div class="col-sm-12 d-flex justify-content-center mt-5 boxServicios">
        

        <div class="buttonBox">
            <a href="home.php">
            <button type="button" class="btn btn-danger btn-lg btnMas">Menu Principal</button>
            </a>
        </div>

        <div class="buttonBox">
            <a href="altaPropiedades.php">
            <button type="button" class="btn btn-danger btn-lg btnMas">Crear Propiedad</button>
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
            <th scope="col">Propiedad</th>
            <th scope="col">Tipo</th>
            <th scope="col">Disponibilidad</th>
            <th scope="col">Disp-fecha</th>
            <th scope="col">Precio</th> 
            <th scope="col">Metros</th> 
            <th scope="col">Descripcion</th> 
            <th scope="col">Imagen</th> 
            <th scope="col">Acción</th> 
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
                <td> <?=$rows['nombre']?> </td>
                <td> <?php if ($rows['tipo']==1): echo'Venta'; else: echo 'Arriendo'; endif; ?></td>
                <td> <?php if ($rows['disp']==0): echo'No Disponible'; else: echo 'Disponible'; endif; ?></td>
                <td> <?php echo $rows['dispfecha']; ?></td>
                <td> <?php echo "$". $rows['precio']; ?></td>
                <td> <?php echo $rows['metros']."M²"; ?></td>
                <td> <?php echo $rows['descripcion']."M²"; ?></td>
                <td><?php echo '<img class="propiedadImgPanel" src="data:image;base64,' .base64_encode($rows['imagen']).'" alt="imagen de propiedad" >';?> </td>
                <td><a href="update.php?id=<?=$rows['id']?>"><img class="crudIcon"src="./img/updateIcon.svg" alt="Actualizar"></a></td>
                <td><a href="delete-process.php?id=<?=$rows['id']?>"> <img class="crudIcon"src="./img/trashIcon.svg" alt="Borrar"></a></td>
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








