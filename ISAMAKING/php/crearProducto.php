<?php
include("conexion.php");
if(isset($_POST['agregar'])){

if (!empty($_POST['nombre']) && !empty($_POST['categoria']) && !empty($_POST['precio']) && !empty($_POST['cantidad'])) {

    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $sql = "SELECT * FROM producto WHERE nombre='$nombre'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        echo '<script>
        alert ("El producto no se pudo registrar")
        window.location.href = "../php/administrador.php"
        </script>';
    } else {
        $insertar = "INSERT INTO producto (nombre, id_categoria,precio , cantidad)VALUES ('$nombre', '$categoria', '$precio', '$cantidad','1')";
    }
    if ($db->query($insertar)) {
        echo '<script>
        alert ("Registro Exitoso")
        window.location.href = "../php/administrador.php"
        </script>';
    }
} else {
        echo '<script>
        alert ("Completar Todos Los Campos")
        window.location.href = "../php/administrador.php"
        </script>';
}
}
?>