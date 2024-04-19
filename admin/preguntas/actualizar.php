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
$consulta = "SELECT * FROM preguntas WHERE id = $id ";
$resultado = mysqli_query($db, $consulta);
$variable = mysqli_fetch_assoc($resultado);

//Arreglo con mensaje de errores
$errores = [];

// Elementos de la tabla
$question = $variable['question'];
$answer = $variable['answer'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $question = mysqli_real_escape_string($db, s($_POST['question']));
    $answer = mysqli_real_escape_string($db, s($_POST['answer']));

    if (!$question || empty(trim($question))) {
        $errores[] = "Debes añadir una pregunta valida";
        $question = '';
    }
    if (!$answer || empty(trim($answer))) {
        $errores[] = "Debes añadir una respuesta valida";
        $answer = '';
    }

    if (empty($errores)) {
        // UPDATE `preguntas` SET `question` = '¿Cuál es el propósito de la vida en realidad?' WHERE `preguntas`.`id` = 3
        $query = "UPDATE preguntas SET question = '$question', answer = '$answer' WHERE `preguntas`.`id` = '$id'";
        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            // Redireccionar al usuario.
            header('Location: /admin?resultado=2');
        }
    }
}
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <section class="section admin">
        <h1 class="titulo-center-rojo" style="margin: 1rem 0;">Actualizar</h1>
        <h2 class="subtitulo-center-rojo">Pregunta Frecuente</h2>
        <a href="/admin" class="boton-rojo">Volver</a>

        <?php foreach ($errores as $error) : ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Informacion necesaria</legend>

                <label for="question">Pregunta:</label>
                <input type="text" id="question" name="question" placeholder="Pregunta necesaria" value="<?php echo $question; ?>">

                <label for="answer">Respuesta:</label>
                <input type="text" id="answer" name="answer" placeholder="Respuesta a la pregunta" value="<?php echo $answer; ?>">
            </fieldset>

            <input type="submit" value="Actualizar pregunta" class="boton-rojo">
        </form>
    </section>
</main>
<?php
//Cerrar la conexion sqli (Opcional)
mysqli_close($db);
incluirTemplate('footer');
?>