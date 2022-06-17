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

	$sql = "SELECT * FROM propiedades WHERE id=$id";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){
    include "conection.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$nombre = validate($_POST['nombre']);
	$precio = validate($_POST['precio']);
	$id = validate($_POST['id']);

	if (empty($nombre)) {
		header("Location: ../update.php?id=$id&error=Name is required");
	}else if (empty($precio)) {
		header("Location: ../update.php?id=$id&error=Email is required");
	}else {

       $sql = "UPDATE propiedades
               SET nombre='$nombre', precio='$precio'
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