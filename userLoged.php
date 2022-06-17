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
include 'header.php';
?>

<section>
    <h1>HOLA <?php echo $name. " ". $id; ?>, YA ESTAS lOGEADO</h1>

    <a class="btn btn-primary" href="logout.php" role="button">Log-Out</a>
</section>