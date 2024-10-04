<?php
require("../php/productos.php")
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador - Tienda de Ropa</title>
    <link rel="stylesheet" href="../CSS/adm.css">
</head>

<body>

    <h1>Panel de Administración - Tienda de Ropa</h1>
    <h2>Gestión de Productos</h2>

    <!-- Formulario para Crear Producto -->
    <form action="../php/crearProducto.php" method="POST" id="createForm">
        <h3>Agregar Nuevo Producto</h3>
        <label for="nombre">Nombre del Producto:</label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="categoria">Categoría:</label>
        <select name="categoria" id="categoria">
            <option value="x" disabled selected>Seleccione la categoria</option>
            <option value="1">Hombre oversize</option>
            <option value="2">Mujer oversize</option>
        </select>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" step="0.01" required>
        <label for="cantidad">Cantidad Disponible:</label>
        <input type="number" id="cantidad" name="cantidad" required>
        <button type="submit" name="agregar">Agregar Producto</button>
    </form>

    <!-- Tabla para Leer Productos -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Acciones</th>
            </tr>
            <?php foreach($productos as $producto){ ?>
                <tr class="text-center">
                <th><?php echo $producto['id_producto']; ?></th>
                <td><?php echo $producto['nombre']; ?></td>
                <td><?php echo $producto['id_categoria']; ?></td>
                <td><?php echo $producto['precio']; ?></td>
                <td><?php echo $producto['cantidad']; ?></td>
                <td><a href="../php/editarProducto.php" >Editar</a>
                <a href="../php/eliminarProducto.php" >Eliminar</a></td>
            </tr>
        <?php }?>
                </thead>
                <tbody id="productTable">
                    
        </tbody>
    </table>

    <!-- Formulario para Actualizar Producto (oculto inicialmente) -->
    <form id="editForm" style="display:none;">
        <h3>Actualizar Producto</h3>
        <input type="hidden" id="editId">
        <label for="editNombre">Nombre del Producto:</label>
        <input type="text" id="editNombre" name="editNombre" required>
        <label for="editCategoria">Categoría:</label>
        <input type="text" id="editCategoria" name="editCategoria" required>
        <label for="editPrecio">Precio:</label>
        <input type="number" id="editPrecio" name="editPrecio" step="0.01" required>
        <label for="editCantidad">Cantidad Disponible:</label>
        <input type="number" id="editCantidad" name="editCantidad" required>
        <button type="submit">Actualizar Producto</button>
        <button type="button">Cancelar</button>
    </form>
</body>

</html>