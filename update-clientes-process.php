<?php 

if (isset($_GET['id'])) {
    include "conection.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM clientes WHERE id=$id";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['updateclientes'])){
    include "conection.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$propietario = validate($_POST['propietario']);
	$direccion = validate($_POST['direccion']);
    $area = validate($_POST['area']);
    $habitaciones = validate($_POST['habitaciones']);
    $banios = validate($_POST['banios']);
    $apto = validate($_POST['apto']);
    $admin = validate($_POST['admin']);
    $canon = validate($_POST['canon']);
    $parquedero = validate($_POST['parquedero']);
    $total = validate($_POST['total']);
    $inicio = validate($_POST['inicio']);
    $inquilino = validate($_POST['inquilino']);
    $seguro = validate($_POST['seguro']);
    $vseguro = validate($_POST['vseguro']);
    $garage = validate($_POST['garage']);
    $celular = validate($_POST['celular']);
    $correo = validate($_POST['correo']);
    $nocontrato = validate($_POST['nocontrato']);
    $fprevisita = validate($_POST['fprevisita']);
    $ftermino = validate($_POST['ftermino']);
    $pazysalvo = validate($_POST['pazysalvo']);

	$id = validate($_POST['id']);

	if (empty($propietario)) {
		header("Location: ../update.php?id=$id&error=Name is required");
	}else if (empty($direccion)) {
		header("Location: ../update.php?id=$id&error=Email is required");
	}else {

       $sql = "UPDATE clientes
               SET propietario='$propietario', direccion='$direccion' , area='$area', habitaciones='$habitaciones', banios='$banios', apto='$apto', admin='$admin', canon='$canon', parquedero='$parquedero', total='$total', inicio='$inicio', inquilino='$inquilino', seguro='$seguro', vseguro='$vseguro', garage='$garage', celular='$celular', correo='$correo', nocontrato='$nocontrato', fprevisita='$fprevisita', ftermino='$ftermino', pazysalvo='$pazysalvo'
               WHERE id=$id ";
       $result = mysqli_query($con, $sql);
       if ($result) {
       	  header("Location: ../actualizadoOk.php?success=successfullyUpdated");
       }else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: read.php");
}