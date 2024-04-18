<?php
require '../includes/funciones.php';
if (!estaAutenticado()) {
    header('Location: /login');
}
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <section class="section">
        <h1 class="titulo-center-rojo" style="margin: 1rem 0;">Pagina de administrador en proceso de desarrollo</h1>
        <div class="botones-admin">
            <a class="boton-rojo" href="/close-sesion.php">Cerrar Sesion</a>
        </div>
    </section>
</main>
<?php incluirTemplate('footer'); ?>