<?php
require 'includes/funciones.php';
// Importar la conexion para cargar datos de tablero
$db = conectarBD();

$query = "SELECT * FROM anuncios";
$consulta_anuncios = mysqli_query($db, $query);
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <h2 class="subtitulo-center-rojo" style="margin-top: 1rem;">Anuncios</h2>
    <section class="section seccion-anuncios">
        <?php while ($anuncio = mysqli_fetch_assoc($consulta_anuncios)) : ?>
            <article class="anuncio">
                <h2 class="titulo-interno-left anuncio-titulo"><?php echo $anuncio['title']; ?></h2>
                <a href="/anuncio.php?id=<?php echo $anuncio['id']; ?>">
                    <div class="contenido-anuncio">
                        <img src="/uploads/anuncios/<?php echo $anuncio['image']; ?>" class="contenido-anuncio-imagen">
                        <div class="contenido-anuncio-contenido">
                            <p class="anuncio-fecha"><?php echo fecha($anuncio['created']); ?></p>
                            <p class="anuncio-descripcion"><?php echo $anuncio['description']; ?></p>
                        </div>
                    </div>
                </a>
            </article> <!--.anuncio-->
        <?php endwhile; ?>
    </section>
</main>
<?php mysqli_close($db);
incluirTemplate('footer'); ?>