<?php
require '../../includes/funciones.php';
if (!estaAutenticado()) {
    header('Location: /login');
}
// Validar que sea un id valido
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /admin');
}
// Importar la conexion para cargar datos de tablero
$db = conectarBD();

// Obtener la variable en caso de existir
$consulta = "SELECT * FROM testimonios WHERE id = $id ";
$resultado = mysqli_query($db, $consulta);
$variable = mysqli_fetch_assoc($resultado);

//Arreglo con mensaje de errores
$errores = [];

// Elementos de la tabla
$name = $variable['name'];
$info = $variable['info'];
$publication = $variable['publication'];
$imagenTestimonio = $variable['image'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($db, s($_POST['name']));
    $info = mysqli_real_escape_string($db, s($_POST['info']));
    $publication = mysqli_real_escape_string($db, s($_POST['publication']));
    $image = $_FILES['imagen'];

    if (!$name || empty(trim($name))) {
        $errores[] = "Debes añadir un nombre valido";
        $name = '';
    }
    if (!$info || empty(trim($info))) {
        $errores[] = "Debes añadir un testimonio valido";
        $info = '';
    }
    if (!$publication || empty(trim($publication))) {
        $errores[] = "Debes añadir una fecha de publicacion valida";
        $publication = '';
    }
    if (!$image) {
        $errores[] = "Debes añadir una imagen";
        $image = $variable['image'];
    }

    if (empty($errores)) {
        // Crear carpeta
        $carpetaImagenes = "../../uploads/testimonios/";
        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        $nombreImagen = '';

        if ($image['name']) {
            // Eliminar imagen anterior en caso de existir
            $carpetaImagenes = '../../uploads/testimonios/';
            unlink($carpetaImagenes . $variable["image"]);
            //Generar un nombre unico
            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
            // Subir la imagen
            move_uploaded_file($image['tmp_name'], $carpetaImagenes . $nombreImagen);
        } else { 
            $nombreImagen = $variable["image"];
        }
        $query = "UPDATE testimonios SET name = '$name', info = '$info', publication = '$publication', image = '$nombreImagen' WHERE `testimonios`.`id` = '$id'";
        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            // Redireccionar al usuario.
            header('Location: /admin?resultado=6');
        }
    }
}
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <section class="section admin">
        <h1 class="titulo-center-rojo" style="margin: 1rem 0;">Actualizar</h1>
        <h2 class="subtitulo-center-rojo">Testimonio</h2>
        <a href="/admin" class="boton-rojo">Volver</a>

        <?php foreach ($errores as $error) : ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Informacion necesaria</legend>

                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" placeholder="Autor del testimonio" value="<?php echo $name; ?>">

                <label for="info">Testimonio (Se recomiendan 255 caracteres):</label>
                <textarea id="info" name="info" placeholder="Testimonio"><?php echo $info; ?></textarea>

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

                <img src="/uploads/testimonios/<?php echo $imagenTestimonio; ?>" class="imagen-small">

                <label for="publication">Fecha del testimonio:</label>
                <input type="date" id="publication" name="publication" placeholder="Fecha de publicacion" onchange="validarFecha()" value="<?php echo $publication; ?>">
            </fieldset>

            <input type="submit" value="Actualizar testimonio" class="boton-rojo">
        </form>
    </section>
</main>
<script>
    function validarFecha() {
        var inputFecha = document.getElementById('publication');
        var fechaSeleccionada = new Date(inputFecha.value);
        var fechaActual = new Date();

        if (fechaSeleccionada > fechaActual) {
            alert('¡La fecha seleccionada no puede ser mayor que la fecha actual!');
            inputFecha.value = ''; // Limpiar el valor del input
        }
    }
</script>
<?php
//Cerrar la conexion sqli (Opcional)
mysqli_close($db);
incluirTemplate('footer');
?>