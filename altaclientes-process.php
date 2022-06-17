<?php 

if (isset($_POST['createcliente'])) {
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
    


	$user_data = 'propietario='.$propietario. '&direccion='.$direccion. '&area='.$area. '&habitaciones='.$habitaciones. '&banios='.$banios. '&apto='.$apto. '&admin='.$admin. '&canon='.$canon. '&parquedero='.$parquedero. '&total='.$total. '&inicio='.$inicio. '&inquilino='.$inquilino. '&seguro='.$seguro. '&vseguro='.$vseguro. '&garage='.$garage. '&celular='.$celular. '&correo='.$correo. '&nocontrato='.$nocontrato. '&fprevisita='.$fprevisita. '&ftermino='.$ftermino. '&pazysalvo='.$pazysalvo;

    if (empty($propietario)) {
		header("Location: ../index.php?error=nombre is required&$user_data");
	}else if (empty($direccion)) {
		header("Location: ../index.php?error=precio is required&$user_data");
	}else {

       $sql = "INSERT INTO clientes(propietario, direccion, area, habitaciones, banios, apto, admin, canon, parquedero, total, inicio, inquilino, seguro, vseguro, garage,celular, correo, nocontrato, fprevisita, ftermino, pazysalvo) 
               VALUES('$propietario', '$direccion' , '$area' , '$habitaciones' , '$banios' , '$apto' , '$admin' , '$canon' , '$parquedero' , '$total' , '$inicio' , '$inquilino' , '$seguro', '$vseguro', '$garage', '$celular', '$correo', '$nocontrato', '$fprevisita', '$ftermino', '$pazysalvo' )";
       $result = mysqli_query($con, $sql);
       if ($result) {
       	  header("Location: ../readClientes.php?success=successfully created");
       }else {
           echo $user_data;
        //   header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	}

}
?>