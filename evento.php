<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <section class="section">
        <div class="cuerpo">
            <h1 class="titulo-center-rojo">Titulo de evento</h1>
            <div class="contenedor evento-individual">
                <picture>
                    <source srcset="/build/img/1.avif" type="image/avif">
                    <source srcset="/build/img/1.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/1.jpg" alt="Banner baile" class="fondo">
                </picture>
                <p>Descripcion Corta: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem consequuntur assumenda minus, deleniti et sequi dolor iste provident natus rem nam iure labore, tempore veniam cum animi ut eligendi cumque.</p>
                <p>Texto introductorio</p>
                <p>Parrafos extra.</p>
                <p class="subtitulo-right-negro">
                    Fecha tentativa del evento
                </p>
            </div>
        </div>
    </section>
</main>
<?php incluirTemplate('footer'); ?>