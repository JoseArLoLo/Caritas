<?php
require '../../includes/funciones.php';
if (!estaAutenticado()) {
    header('Location: /login');
}
// Importar la conexion para cargar datos de tablero
$db = conectarBD();

//Arreglo con mensaje de errores
$errores = [];

// Elementos de la tabla
$title = '';
$description = '';
$image = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = mysqli_real_escape_string($db, s($_POST['title']));
    $description = mysqli_real_escape_string($db, s($_POST['description']));
    $image = $_FILES['imagen'];

    if (!$title || empty(trim($title))) {
        $errores[] = "Debes añadir un titulo valido";
        $title = '';
    }
    if (!$description || empty(trim($description))) {
        $errores[] = "Debes añadir una descripcion valida";
        $description = '';
    }
    if (!$image) {
        $errores[] = "Debes añadir una imagen";
        $image = null;
    }
    
    if (empty($errores)) {
        // Crear carpeta
        $carpetaImagenes = "../../uploads/galeria/";
        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        $nombreImagen = '';

        if ($image['name']) {
            //Generar un nombre unico
            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
            // Subir la imagen
            move_uploaded_file($image['tmp_name'], $carpetaImagenes . $nombreImagen);
        }
        $query = "INSERT INTO `galeria` (`id`, `image`, `title`, `description`) VALUES (NULL, '$nombreImagen', '$title', '$description')";
        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            // Redireccionar al usuario.
            header('Location: /admin?resultado=7');
        }
    }
}
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <section class="section admin">
        <h1 class="titulo-center-rojo" style="margin: 1rem 0;">Crear</h1>
        <h2 class="subtitulo-center-rojo">Imagen en galeria</h2>
        <a href="/admin" class="boton-rojo">Volver</a>

        <?php foreach ($errores as $error) : ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Informacion necesaria</legend>

                <label for="title">Titulo:</label>
                <input maxlength="30" type="text" id="title" name="title" placeholder="Titulo de la imagen" value="<?php echo $title; ?>">

                <label for="description">Descripcion:</label>
                <textarea maxlength="130" id="description" name="description" placeholder="Descripcion de la imagen"><?php echo $description; ?></textarea>

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">
            </fieldset>

            <input type="submit" value="Crear imagen" class="boton-rojo">
        </form>
    </section>
</main>
<?php
//Cerrar la conexion sqli (Opcional)
mysqli_close($db);
incluirTemplate('footer');
?>