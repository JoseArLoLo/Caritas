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
    $carpetaImagenes = '';
    if (in_array($table, $data) && $id) {
        switch ($table) {
            case "testimonios":
                $carpetaImagenes = '../uploads/testimonios/';
                unlink($carpetaImagenes . $_POST['image']);
                break;
            case "galeria":
                $carpetaImagenes = '../uploads/galeria/';
                unlink($carpetaImagenes . $_POST['image']);
                break;
            case "eventos":
                $carpetaImagenes = '../uploads/eventos/';
                unlink($carpetaImagenes . $_POST['image']);
                break;
            case "anuncios":
                $carpetaImagenes = '../uploads/anuncios/';
                unlink($carpetaImagenes . $_POST['image']);
                break;
        }

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
        <h1 class="titulo-center-rojo" style="margin: 1rem 0;">Panel de administración</h1>
        <div class="botones-admin">
            <a class="boton-rojo" href="/close-sesion.php">Cerrar Sesion</a>
            <a class="boton-verde" href="/admin/donantes/">Donantes</a>
        </div>

        <?php if ($resultado == 1) : ?>
            <p class="alerta exito">Pregunta creada correctamente</p>
        <?php elseif ($resultado == 2) : ?>
            <p class="alerta exito">Pregunta actualizada correctamente</p>
        <?php elseif ($resultado == 3) : ?>
            <p class="alerta exito">Opinion creada correctamente</p>
        <?php elseif ($resultado == 4) : ?>
            <p class="alerta exito">Opinion actualizada correctamente</p>
        <?php elseif ($resultado == 5) : ?>
            <p class="alerta exito">Testimonio creado correctamente</p>
        <?php elseif ($resultado == 6) : ?>
            <p class="alerta exito">Testimonio actualizado correctamente</p>
        <?php elseif ($resultado == 7) : ?>
            <p class="alerta exito">Añadido a galeria correctamente</p>
        <?php elseif ($resultado == 8) : ?>
            <p class="alerta exito">Imagen de galeria actualizada correctamente</p>
        <?php elseif ($resultado == 9) : ?>
            <p class="alerta exito">Evento creado correctamente</p>
        <?php elseif ($resultado == 10) : ?>
            <p class="alerta exito">Evento actualizado correctamente</p>
        <?php elseif ($resultado == 11) : ?>
            <p class="alerta exito">Anuncio creado correctamente</p>
        <?php elseif ($resultado == 12) : ?>
            <p class="alerta exito">Anuncio actualizado correctamente</p>
        <?php endif; ?>

        <div class="tablas_administrables">
            <div class="elementos" id="anuncios">
                <h2 class="subtitulo-center-rojo">Anuncios</h2>
                <a class="boton-rojo" href="/admin/anuncios/crear.php">Nuevo anuncio</a>
                <div class="contenedor-tabla">
                    <table class="tabla">
                        <thead>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th>Imagen</th>
                            <th>Descripcion</th>
                            <th>Contenido</th>
                            <th>Creacion</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            <?php while ($anuncio = mysqli_fetch_assoc($anuncios)) : ?>
                                <tr>
                                    <td><?php echo $anuncio['id']; ?></td>
                                    <td><?php echo $anuncio['title']; ?></td>
                                    <td><img src="/uploads/anuncios/<?php echo $anuncio['image']; ?>" class="imagen-tabla"></td>
                                    <td><?php echo $anuncio['description']; ?></td>
                                    <td><?php echo $anuncio['content']; ?></td>
                                    <td><?php echo $anuncio['created']; ?></td>
                                    <td>
                                        <form method="post" class="w-100">
                                            <input type="hidden" name="id" value="<?php echo $anuncio['id']; ?>">
                                            <input type="hidden" name="data" value="anuncios">
                                            <input type="hidden" name="image" value="<?php echo $anuncio['image']; ?>">
                                            <input type="submit" class="boton-negro-block" value="Eliminar">
                                        </form>

                                        <a href="/admin/anuncios/actualizar.php?id=<?php echo $anuncio['id']; ?>" class="boton-rojo-block">Actualizar</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div><!--Seccion Anuncios-->
            <div class="elementos" id="eventos">
                <h2 class="subtitulo-center-rojo">Eventos</h2>
                <a class="boton-rojo" href="/admin/eventos/crear.php">Nuevo evento</a>
                <div class="contenedor-tabla">
                    <table class="tabla">
                        <thead>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th>Imagen</th>
                            <th>Descripcion</th>
                            <th>Contenido</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            <?php while ($evento = mysqli_fetch_assoc($eventos)) : ?>
                                <tr>
                                    <td><?php echo $evento['id']; ?></td>
                                    <td><?php echo $evento['title']; ?></td>
                                    <td><img src="/uploads/eventos/<?php echo $evento['image']; ?>" class="imagen-tabla"></td>
                                    <td><?php echo $evento['description']; ?></td>
                                    <td><?php echo $evento['content']; ?></td>
                                    <td><?php echo $evento['due']; ?></td>
                                    <td>
                                        <form method="post" class="w-100">
                                            <input type="hidden" name="id" value="<?php echo $evento['id']; ?>">
                                            <input type="hidden" name="data" value="eventos">
                                            <input type="hidden" name="image" value="<?php echo $evento['image']; ?>">
                                            <input type="submit" class="boton-negro-block" value="Eliminar">
                                        </form>

                                        <a href="/admin/eventos/actualizar.php?id=<?php echo $evento['id']; ?>" class="boton-rojo-block">Actualizar</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div><!--Seccion Eventos-->
            <div class="elementos" id="galeria-imgs">
                <h2 class="subtitulo-center-rojo">Imagenes en galeria</h2>
                <a class="boton-rojo" href="/admin/galeria/crear.php">Nueva Imagen</a>
                <div class="contenedor-tabla">
                    <table class="tabla">
                        <thead>
                            <th>ID</th>
                            <th>Imagen</th>
                            <th>Titulo</th>
                            <th>Descripcion</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            <?php while ($imagen = mysqli_fetch_assoc($galeria)) : ?>
                                <tr>
                                    <td><?php echo $imagen['id']; ?></td>
                                    <td><img src="/uploads/galeria/<?php echo $imagen['image']; ?>" class="imagen-tabla"></td>
                                    <td><?php echo $imagen['title']; ?></td>
                                    <td><?php echo $imagen['description']; ?></td>
                                    <td>
                                        <form method="post" class="w-100">
                                            <input type="hidden" name="id" value="<?php echo $imagen['id']; ?>">
                                            <input type="hidden" name="data" value="galeria">
                                            <input type="hidden" name="image" value="<?php echo $imagen['image']; ?>">
                                            <input type="submit" class="boton-negro-block" value="Eliminar">
                                        </form>

                                        <a href="/admin/galeria/actualizar.php?id=<?php echo $imagen['id']; ?>" class="boton-rojo-block">Actualizar</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div><!--Seccion Imagenes galeria-->
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
            </div><!--Seccion Preguntas Frecuentes-->
            <div class="elementos" id="opiniones">
                <h2 class="subtitulo-center-rojo">Opiniones y sugerencias</h2>
                <a class="boton-rojo" href="/admin/opiniones/crear.php">Nueva opinion/sugerencia</a>
                <div class="contenedor-tabla">
                    <table class="tabla">
                        <thead>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th>Contenido</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            <?php while ($opinion = mysqli_fetch_assoc($sugerencias)) : ?>
                                <tr>
                                    <td><?php echo $opinion['id']; ?></td>
                                    <td><?php echo $opinion['title']; ?></td>
                                    <td><?php echo $opinion['resume']; ?></td>
                                    <td>
                                        <form method="post" class="w-100">
                                            <input type="hidden" name="id" value="<?php echo $opinion['id']; ?>">
                                            <input type="hidden" name="data" value="sugerencias">
                                            <input type="submit" class="boton-negro-block" value="Eliminar">
                                        </form>

                                        <a href="/admin/opiniones/actualizar.php?id=<?php echo $opinion['id']; ?>" class="boton-rojo-block">Actualizar</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div><!--Seccion Opiniones y sugerencias-->
            <div class="elementos" id="testimonios">
                <h2 class="subtitulo-center-rojo">Testimonios</h2>
                <a class="boton-rojo" href="/admin/testimonios/crear.php">Nuevo Testimonio</a>
                <div class="contenedor-tabla">
                    <table class="tabla">
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Testimonio</th>
                            <th>Foto</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            <?php while ($testimonio = mysqli_fetch_assoc($testimonios)) : ?>
                                <tr>
                                    <td><?php echo $testimonio['id']; ?></td>
                                    <td><?php echo $testimonio['name']; ?></td>
                                    <td><?php echo $testimonio['info']; ?></td>
                                    <td><img src="/uploads/testimonios/<?php echo $testimonio['image']; ?>" class="imagen-tabla"></td>
                                    <td><?php echo $testimonio['publication']; ?></td>
                                    <td>
                                        <form method="post" class="w-100">
                                            <input type="hidden" name="id" value="<?php echo $testimonio['id']; ?>">
                                            <input type="hidden" name="data" value="testimonios">
                                            <input type="hidden" name="image" value="<?php echo $testimonio['image']; ?>">
                                            <input type="submit" class="boton-negro-block" value="Eliminar">
                                        </form>

                                        <a href="/admin/testimonios/actualizar.php?id=<?php echo $testimonio['id']; ?>" class="boton-rojo-block">Actualizar</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div><!--Seccion Testimonios-->
        </div>
    </section>
</main>
<?php
//Cerrar la conexion sqli (Opcional)
mysqli_close($db);
incluirTemplate('footer');
?>