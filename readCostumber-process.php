<?php

include "conection.php";

$sql = "SELECT * FROM clientes ORDER BY id DESC";
$result = mysqli_query($con , $sql);