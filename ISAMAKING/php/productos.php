<?php 
include("conexion.php");
$query = $db->query("SELECT * from producto");
$productos = $query;
?>