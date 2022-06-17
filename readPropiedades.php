<?php
include "conection.php";

$sql = "SELECT * FROM propiedades ORDER BY id DESC";
$result = mysqli_query($con,$sql);
?>