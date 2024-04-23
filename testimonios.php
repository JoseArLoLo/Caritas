<?php
setlocale(LC_TIME, 'es_ES.UTF-8');
require 'includes/funciones.php';

// Importar la conexion para cargar datos de tablero
$db = conectarBD();

$query = "SELECT * FROM testimonios";
$testimonios = mysqli_query($db, $query);

incluirTemplate('header');
?>
<main class="contenedor seccion">
    <section class="section">
        <h1 class="titulo-center-rojo" style="margin-top: 1rem;">Testimonios</h1>
        <div class="contenedor">
            <div class="contenedor-testimonios-esp">
                <?php while ($testimonio = mysqli_fetch_assoc($testimonios)) : ?>
                    <div class="testimonio">
                        <div class="contedor-testimonio-img">
                            <img class="testimonio-img" width="200" height="200" src="/testimonios/<?php echo $testimonio['image']; ?>" alt="testimonio">
                        </div>
                        <div class="testimonio-info">
                            <h2 class="subtitulo-left-negro"><?php echo $testimonio['name']; ?></h2>
                            <p><?php echo $testimonio['info']; ?></p>
                            <h2 class="subtitulo-right-negro-2"><?php echo fecha($testimonio['publication']); ?></h2>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
</main>
<?php incluirTemplate('footer'); ?>