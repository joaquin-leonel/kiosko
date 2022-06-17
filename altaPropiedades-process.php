<?php 

if (isset($_POST['create'])) {
	include "conection.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}


	$nombre = validate($_POST['nombre']);
    $tipo = validate($_POST['tipo']);
    $disp = validate($_POST['disp']);
    $dispfecha = validate($_POST['dispfecha']);
    $imagen= addslashes (file_get_contents ($_FILES['imagen'] ['tmp_name'])); 
    $imagen2= addslashes (file_get_contents ($_FILES['imagen2'] ['tmp_name'])); 
    $imagen3= addslashes (file_get_contents ($_FILES['imagen3'] ['tmp_name'])); 
    $precio = validate($_POST['precio']);
    $metros = validate($_POST['metros']);
    $ambientes = validate($_POST['ambientes']);
    $expensas = validate($_POST['expensas']);
    $antiguedad = validate($_POST['antiguedad']);
    $ubicacion = validate($_POST['ubicacion']);
    $ubicacionurl = validate($_POST['ubicacionurl']);
	$descripcion = validate($_POST['descripcion']);


	$user_data = 'nombre='.$nombre. '&tipo='.$tipo.'&disp='.$disp.'&dispfecha='.$dispfecha. '&imagen='.$imagen. '&imagen2='.$imagen2. '&imagen3='.$imagen3. '&precio='.$precio. '&metros='.$metros. '&ambientes='.$ambientes. '&expensas='.$expensas. '&antiguedad='.$antiguedad. '&ubicacion='.$ubicacion. '&ubicacionurl='.$ubicacionurl. '&descripcion='.$descripcion;

    if (empty($nombre)) {
		header("Location: ../index.php?error=nombre is required&$user_data");
	}else if (empty($precio)) {
		header("Location: ../index.php?error=precio is required&$user_data");
	}else {

       $sql = "INSERT INTO propiedades(nombre, tipo, imagen, imagen2, imagen3, precio, metros, ambientes, expensas, antiguedad, ubicacion, ubicacionurl, descripcion) 
               VALUES('$nombre', '$tipo' ,'$disp' ,'$dispfecha' , '$imagen' , '$imagen2' , '$imagen3' , '$precio' , '$metros' , '$ambientes' , '$expensas' , '$antiguedad' , '$ubicacion' , '$ubicacionurl' , '$descripcion' )";
       $result = mysqli_query($con, $sql);
       if ($result) {
       	  header("Location: ../readPropiedades.php?success=successfully created");
       }else {
           echo $user_data;
        //   header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	}

}
?>