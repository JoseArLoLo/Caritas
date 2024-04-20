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
$content = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = mysqli_real_escape_string($db, s($_POST['title']));
    $content = mysqli_real_escape_string($db, s($_POST['content']));

    if (!$title || empty(trim($title))) {
        $errores[] = "Debes añadir un titulo para la opinion valida";
        $title = '';
    }
    if (!$content || empty(trim($content))) {
        $errores[] = "Debes añadir un contenido valido";
        $content = '';
    }

    if (empty($errores)) {
        $query = "INSERT INTO sugerencias (`title`, `resume`) VALUES ('$title', '$content')";
        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            // Redireccionar al usuario.
            header('Location: /admin?resultado=3');
        }
    }
}
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <section class="section admin">
        <h1 class="titulo-center-rojo" style="margin: 1rem 0;">Crear</h1>
        <h2 class="subtitulo-center-rojo">Opinion o sugerencia</h2>
        <a href="/admin" class="boton-rojo">Volver</a>

        <?php foreach ($errores as $error) : ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Informacion necesaria</legend>

                <label for="title">Opinion o sugerencia:</label>
                <input type="text" id="title" name="title" placeholder="Titulo necesario" value="<?php echo $title; ?>">

                <label for="content">Contenido:</label>
                <textarea id="content" name="content" placeholder="Contenido de la opinion"><?php echo $content; ?></textarea>
            </fieldset>

            <input type="submit" value="Crear opinion/Sugerencia" class="boton-rojo">
        </form>
    </section>
</main>
<?php
//Cerrar la conexion sqli (Opcional)
mysqli_close($db);
incluirTemplate('footer');
?>