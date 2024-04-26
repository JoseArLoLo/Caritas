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
$consulta = "SELECT * FROM eventos WHERE id = $id LIMIT 1";
$resultado = mysqli_query($db, $consulta);
$variable = mysqli_fetch_assoc($resultado);
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <section class="section">
        <div class="cuerpo">
            <h1 class="titulo-center-rojo"><?php echo $variable['title']; ?></h1>
            <div class="contenedor evento-individual">
                <img loading="lazy" src="/uploads/eventos/<?php echo $variable['image'];?>" alt="Banner baile" class="fondo">
                <p><?php echo $variable['description'];?></p>
                <p><?php echo $variable['content'];?></p>
                <p class="subtitulo-right-negro"><?php echo fecha($variable['due']); ?></p>
            </div>
        </div>
    </section>
</main>
<?php incluirTemplate('footer'); ?>