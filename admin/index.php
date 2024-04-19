<?php
require '../includes/funciones.php';
if (!estaAutenticado()) {
    header('Location: /login');
}
// Importar la conexion para cargar datos de tablero
$db = conectarBD();

$resultado = $_GET['resultado'] ?? null;

$data = ['anuncios', 'eventos', 'galeria', 'preguntas', 'sugerencias', 'testimonios'];
$query = "SELECT * FROM anuncios";
$anuncios = mysqli_query($db, $query);

$query = "SELECT * FROM eventos";
$eventos = mysqli_query($db, $query);

$query = "SELECT * FROM galeria";
$galeria = mysqli_query($db, $query);

$query = "SELECT * FROM preguntas";
$preguntas = mysqli_query($db, $query);

$query = "SELECT * FROM sugerencias";
$sugerencias = mysqli_query($db, $query);

$query = "SELECT * FROM testimonios";
$testimonios = mysqli_query($db, $query);

// Metodo de eliminar si se pulsa eliminar
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $table = $_POST['data'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    if (in_array($table, $data) && $id) {
        // Eliminar Entidad
        $query = "DELETE FROM $table WHERE id = $id";
        $resultado = mysqli_query($db, $query);
        if ($resultado) {
            header('location: /admin');
        }
    }
}
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <section class="section admin">
        <h1 class="titulo-center-rojo" style="margin: 1rem 0;">Panel de administracion</h1>
        <div class="botones-admin">
            <a class="boton-rojo" href="/close-sesion.php">Cerrar Sesion</a>
        </div>

        <?php if ($resultado == 1) : ?>
            <p class="alerta exito">Pregunta creada correctamente</p>
        <?php elseif ($resultado == 2) : ?>
            <p class="alerta exito">Pregunta actualizada correctamente</p>
        <?php endif; ?>

        <div class="tablas_administrables">
            <div class="elementos" id="preguntas">
                <h2 class="subtitulo-center-rojo">Preguntas Frecuentes</h2>
                <a class="boton-rojo" href="/admin/preguntas/crear.php">Nueva pregunta</a>
                <div class="contenedor-tabla">
                    <table class="tabla">
                        <thead>
                            <th>ID</th>
                            <th>Pregunta</th>
                            <th>Respuesta</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            <?php while ($pregunta = mysqli_fetch_assoc($preguntas)) : ?>
                                <tr>
                                    <td><?php echo $pregunta['id']; ?></td>
                                    <td><?php echo $pregunta['question']; ?></td>
                                    <td><?php echo $pregunta['answer']; ?></td>
                                    <td>
                                        <form method="post" class="w-100">
                                            <input type="hidden" name="id" value="<?php echo $pregunta['id']; ?>">
                                            <input type="hidden" name="data" value="preguntas">
                                            <input type="submit" class="boton-negro-block" value="Eliminar">
                                        </form>

                                        <a href="/admin/preguntas/actualizar.php?id=<?php echo $pregunta['id']; ?>" class="boton-rojo-block">Actualizar</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
//Cerrar la conexion sqli (Opcional)
mysqli_close($db);
incluirTemplate('footer');
?>