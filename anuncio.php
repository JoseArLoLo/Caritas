<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <section class="section">
        <div class="cuerpo">
            <h1 class="titulo-center-negro">Titulo de anuncio</h1>
            <div class="contenedor anuncio-individual">
                <picture>
                    <source srcset="/build/img/1.avif" type="image/avif">
                    <source srcset="/build/img/1.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/1.jpg" alt="Banner baile" class="fondo">
                </picture>
                <h2 class="subtitulo-left-negro">Fecha de publicacion del anuncio</h2>
                <p>Descripcion Corta: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem consequuntur assumenda minus, deleniti et sequi dolor iste provident natus rem nam iure labore, tempore veniam cum animi ut eligendi cumque.</p>
                <p>Texto introductorio</p>
                <p>Parrafos extra.</p>
            </div>
        </div>
    </section>
</main>
<?php incluirTemplate('footer'); ?>