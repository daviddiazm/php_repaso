<?php
include "../model/conection.php";

$id = $_GET["id"];
$query = "DELETE FROM usuarios WHERE id = $id";
$sql = $conection->query($query);
header("location:../index.php");
?>