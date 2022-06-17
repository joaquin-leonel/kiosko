<?php  

if(isset($_GET['id'])){
    include "conection.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "DELETE FROM clientes
	        WHERE id=$id";
   $result = mysqli_query($con, $sql);
   if ($result) {
   	  header("Location: ../deleteOk.php?success=successfully deleted");
   }else {
      header("Location: ../readCostumer.php?error=unknown error occurred&$user_data");
   }

}else {
	header("Location: ../readCostumer.php");
}