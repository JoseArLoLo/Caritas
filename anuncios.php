<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <h2 class="subtitulo-left-negro">Titulo Pagina</h2>
    <section class="section seccion-anuncios">
        <article class="anuncio">
            <h2 class="titulo-interno anuncio-titulo">Titulo anuncio</h2>
            <a href="/anuncio.php">
                <div class="contenido-anuncio">
                    <img src="/build/img/1.jpg" class="contenido-anuncio-imagen">
                    <div class="contenido-anuncio-contenido">
                        <p class="anuncio-fecha">xx-xx-xxxx</p>
                        <p class="anuncio-descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam temporibus ex, modi, sed fuga suscipit fugiat reprehenderit quos asperiores repudiandae dolor eligendi</p>
                    </div>
                </div>
            </a>
        </article> <!--.anuncio-->
        <article class="anuncio">
            <h2 class="titulo-interno anuncio-titulo">Titulo anuncio</h2>
            <a href="/anuncio.php">
                <div class="contenido-anuncio">
                    <img src="/build/img/1.jpg" class="contenido-anuncio-imagen">
                    <div class="contenido-anuncio-contenido">
                        <p class="anuncio-fecha">xx-xx-xxxx</p>
                        <p class="anuncio-descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam temporibus ex, modi, sed fuga suscipit fugiat reprehenderit quos asperiores repudiandae dolor eligendi</p>
                    </div>
                </div>
            </a>
        </article> <!--.anuncio-->
        <article class="anuncio">
            <h2 class="titulo-interno anuncio-titulo">Titulo anuncio</h2>
            <a href="/anuncio.php">
                <div class="contenido-anuncio">
                    <img src="/build/img/1.jpg" class="contenido-anuncio-imagen">
                    <div class="contenido-anuncio-contenido">
                        <p class="anuncio-fecha">xx-xx-xxxx</p>
                        <p class="anuncio-descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam temporibus ex, modi, sed fuga suscipit fugiat reprehenderit quos asperiores repudiandae dolor eligendi</p>
                    </div>
                </div>
            </a>
        </article> <!--.anuncio-->
    </section>
</main>
<?php incluirTemplate('footer'); ?>