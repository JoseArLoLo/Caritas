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
$image = '';
$description = '';
$content = '';
$due = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = mysqli_real_escape_string($db, s($_POST['title']));
    $image = $_FILES['imagen'];
    $description = mysqli_real_escape_string($db, s($_POST['description']));
    $content = mysqli_real_escape_string($db, s($_POST['content']));
    $due = date('Y/m/d');

    if (!$title || empty(trim($title))) {
        $errores[] = "Debes añadir un titulo valido";
        $title = '';
    }
    if (!$image) {
        $errores[] = "Debes añadir una imagen";
        $image = null;
    }
    if (!$description || empty(trim($description))) {
        $errores[] = "Debes añadir una descripcion valida";
        $description = '';
    }
    if (!$content || empty(trim($content))) {
        $errores[] = "Debes añadir contenido para este anuncio";
        $content = '';
    }
    
    if (empty($errores)) {
        // Crear carpeta
        $carpetaImagenes = "../../uploads/anuncios/";
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
        $query = "INSERT INTO `anuncios` (`id`, `title`, `image`, `description`, `content`, `created`) VALUES (NULL, '$title', '$nombreImagen', '$description', '$content', '$due')";
        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            // Redireccionar al usuario.
            header('Location: /admin?resultado=11');
        }
    }
}
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <section class="section admin">
        <h1 class="titulo-center-rojo" style="margin: 1rem 0;">Crear</h1>
        <h2 class="subtitulo-center-rojo">Anuncio</h2>
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
                <input maxlength="45" type="text" id="title" name="title" placeholder="Titulo del anuncio" value="<?php echo $title; ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

                <label for="description">Descripcion:</label>
                <textarea maxlength="250" id="description" name="description" placeholder="Descripcion del anuncio"><?php echo $description; ?></textarea>

                <label for="content">Contenido:</label>
                <textarea id="content" name="content" placeholder="Contenido de la vista"><?php echo $content; ?></textarea>
            </fieldset>

            <input type="submit" value="Crear Anuncio" class="boton-rojo">
        </form>
    </section>
</main>
<?php
//Cerrar la conexion sqli (Opcional)
mysqli_close($db);
incluirTemplate('footer');
?>