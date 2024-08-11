<?php
// 1) Conexión a la base de datos
$conexion = mysqli_connect("sql208.infinityfree.com", "if0_37011039", "deseo444", "if0_37011039_tienda");

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Verifica si se ha enviado una solicitud POST para guardar cambios
if (isset($_POST['guardar_cambios'])) {
    // 2) Almacenamos los datos del envío POST de manera segura
    $id = mysqli_real_escape_string($conexion, $_POST['id']);
    $prenda = mysqli_real_escape_string($conexion, $_POST['prenda']);
    $marca = mysqli_real_escape_string($conexion, $_POST['marca']);
    $talle = mysqli_real_escape_string($conexion, $_POST['talle']);
    $precio = mysqli_real_escape_string($conexion, $_POST['precio']);
    $stock = mysqli_real_escape_string($conexion, $_POST['stock']);

    // Manejar la nueva imagen, si se cargó
    if ($_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        $consulta = "UPDATE ropa SET prenda='$prenda', marca='$marca', talle='$talle', precio='$precio', stock='$stock', imagen='$imagen' WHERE id='$id'";
    } else {
        $consulta = "UPDATE ropa SET prenda='$prenda', marca='$marca', talle='$talle', precio='$precio', stock='$stock' WHERE id='$id'";
    }

    // 3) Ejecutar la consulta y verificar si fue exitosa
    if (mysqli_query($conexion, $consulta)) {
        echo "Producto actualizado exitosamente";
        header('Location: listar.php'); // Redirige a listar.php después de actualizar el producto
        exit();
    } else {
        echo "Error al actualizar el producto: " . mysqli_error($conexion);
    }
}

// Obtener los datos actuales del producto
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conexion, $_GET['id']);
    $resultado = mysqli_query($conexion, "SELECT * FROM ropa WHERE id='$id'");
    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $producto = mysqli_fetch_assoc($resultado);
        $prenda = $producto['prenda'];
        $marca = $producto['marca'];
        $talle = $producto['talle'];
        $precio = $producto['precio'];
        $stock = $producto['stock'];
        $imagen = $producto['imagen'];
    } else {
        echo "Producto no encontrado.";
        exit();
    }
} else {
    echo "ID de producto no especificado.";
    exit();
}

// 4) Cerrar la conexión
mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Producto - Bellarobba</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        /* Estilos similares al CSS que proporcionaste */
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-center">Modificar Producto</h2>
                <p class="text-center">Ingrese los nuevos datos de la prenda.</p>
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="mb-3">
                        <label for="prenda" class="form-label">Tipo de prenda</label>
                        <input type="text" class="form-control" id="prenda" name="prenda" placeholder="Tipo de Prenda" value="<?php echo htmlspecialchars($prenda); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="marca" class="form-label">Marca</label>
                        <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca" value="<?php echo htmlspecialchars($marca); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="talle" class="form-label">Talle</label>
                        <input type="text" class="form-control" id="talle" name="talle" placeholder="Talle" value="<?php echo htmlspecialchars($talle); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio" value="<?php echo htmlspecialchars($precio); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="text" class="form-control" id="stock" name="stock" placeholder="Stock" value="<?php echo htmlspecialchars($stock); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Imagen Actual</label>
                        <?php if ($imagen): ?>
                            <img src="data:image/jpg;base64,<?php echo base64_encode($imagen); ?>" alt="Imagen del producto" class="img-thumbnail" style="height: 100px;"/>
                        <?php else: ?>
                            <p>No hay imagen disponible.</p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Nueva Imagen</label>
                        <input type="file" class="form-control" id="imagen" name="imagen">
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" name="guardar_cambios" class="btn btn-primary">Guardar Cambios</button>
                        <button type="submit" name="cancelar" formaction="listar.php" class="btn btn-secondary">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <p>&copy; Bellarobba 2024</p>
                </div>
            </div>
        </div>
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white"> &copy; Bellarobba 2024</p></div>
        </footer>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
</html>
