<?php
require 'includes/funciones.php';
// Validar que sea un id valido
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /');
}
// Importar la conexion para cargar datos de tablero
$db = conectarBD();

// Obtener la variable en caso de existir
$consulta = "SELECT * FROM anuncios WHERE id = $id LIMIT 1";
$resultado = mysqli_query($db, $consulta);
$variable = mysqli_fetch_assoc($resultado);

incluirTemplate('header');
?>
<main class="contenedor seccion">
    <section class="section">
        <div class="cuerpo">
            <h1 class="titulo-center-negro"><?php echo $variable['title']; ?></h1>
            <div class="contenedor anuncio-individual">
                <img loading="lazy" src="/uploads/anuncios/<?php echo $variable['image'];?>" alt="Imagen anuncio" class="fondo">
                <h2 class="subtitulo-left-negro"><?php echo fecha($variable['created']); ?></h2>
                <p><?php echo $variable['description'];?></p>
                <p><?php echo $variable['content'];?></p>
            </div>
        </div>
    </section>
</main>
<?php mysqli_close($db);
incluirTemplate('footer'); ?>