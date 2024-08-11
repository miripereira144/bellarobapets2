<?php
// 1) Conexión
$conexion = mysqli_connect("sql208.infinityfree.com", "if0_37011039", "deseo444", "if0_37011039_tienda");

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// 2) Almacenamos los datos del envío POST de manera segura
$prenda = mysqli_real_escape_string($conexion, $_POST['prenda']);
$marca = mysqli_real_escape_string($conexion, $_POST['marca']);
$talle = mysqli_real_escape_string($conexion, $_POST['talle']);
$precio = mysqli_real_escape_string($conexion, $_POST['precio']);
$stock = mysqli_real_escape_string($conexion, $_POST['stock']);

// Verificar si la carga de la imagen fue exitosa
if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    // 3) Preparar la orden SQL
    $consulta = "INSERT INTO ropa (prenda, marca, talle, precio, stock, imagen) VALUES ('$prenda', '$marca', '$talle', '$precio', '$stock', '$imagen')";

    // 4) Ejecutar la consulta y verificar si fue exitosa
    if (mysqli_query($conexion, $consulta)) {
        echo "Producto agregado exitosamente";
        header('Location: listar.php'); // Redirige a listar.php después de agregar el producto
        exit();
    } else {
        echo "Error al agregar el producto: " . mysqli_error($conexion);
    }
} else {
    echo "Error al cargar la imagen.";
}

// 5) Cerrar la conexión
mysqli_close($conexion);
?>
