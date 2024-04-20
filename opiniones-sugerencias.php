<?php
require 'includes/funciones.php';
$db = conectarBD();

$query = "SELECT * FROM sugerencias";
$opiniones = mysqli_query($db, $query);
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <section class="section">
        <h1 class="titulo-center-rojo" style="margin-top: 1rem;">Opiniones y sugerencias</h1>
        <div class="contenedor">
            <div class="contenedor-preguntas">
                <?php while ($opinion = mysqli_fetch_assoc($opiniones)) : ?>
                    <div class="pregunta">
                        <h2 class="titulo-interno-left-rojo"><?php echo $opinion['title']; ?></h2>
                        <p><?php echo $opinion['resume']; ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
</main>
<?php incluirTemplate('footer'); ?>