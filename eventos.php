<?php
require 'includes/funciones.php';
// Importar la conexion para cargar datos de tablero
$db = conectarBD();

$query = "SELECT * FROM eventos";
$consulta_eventos = mysqli_query($db, $query);

incluirTemplate('header', $donar = false, $eventos = true);
?>
<main class="contenedor seccion">
    <section class="section contenedor-eventos" style="margin-top: 1rem;">
        <h1 class="titulo-center">Eventos</h1>
        <div class="eventos">
            <?php while ($evento = mysqli_fetch_assoc($consulta_eventos)) : ?>
                <a href="/evento.php?id=<?php echo $evento['id']; ?>" class="evento">
                    <img loading="lazy" class="evento-imagen" src="/uploads/eventos/<?php echo $evento['image'];?>" alt="Imagen Evento">
                    <div class="evento-contenido">
                        <h2 class="subtitulo-left-negro"><?php echo $evento['title'];?></h2>
                        <p><?php echo $evento['description'];?></p>
                        <p class="evento-fecha"><?php echo fecha($evento['due']); ?></p>
                    </div>
                </a>
            <?php endwhile; ?>
        </div>
    </section>
</main>
<?php 
mysqli_close($db);
incluirTemplate('footer'); 
?>