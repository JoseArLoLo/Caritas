<?php
require 'includes/funciones.php';
$db = conectarBD();

$query = "SELECT * FROM preguntas";
$preguntas = mysqli_query($db, $query);
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <section class="section">
        <h1 class="titulo-center-rojo" style="margin-top: 1rem;">Preguntas Frecuentes</h1>
        <div class="contenedor">
            <div class="contenedor-preguntas">
                <?php while ($pregunta = mysqli_fetch_assoc($preguntas)) : ?>
                    <div class="pregunta">
                        <h2 class="titulo-interno-left-rojo"><?php echo $pregunta['question']; ?></h2>
                        <p><?php echo $pregunta['answer']; ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
</main>
<?php incluirTemplate('footer'); ?>