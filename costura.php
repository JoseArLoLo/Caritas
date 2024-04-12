<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<picture>
    <source srcset="/build/img/banner_costura.avif" type="image/avif">
    <source srcset="/build/img/banner_costura.webp" type="image/webp">
    <img loading="lazy" src="/build/img/banner_costura.jpg" alt="Banner costura" class="fondo">
</picture>
<main class="contenedor seccion">
    <section class="section">
        <div class="cuerpo">
            <div class="contenedor">
                <p>Bienvenidos al mundo creativo y fascinante de la costura en nuestro taller especializado.</p>
                <p>Aquí, cada puntada es una oportunidad para desatar la imaginación y crear prendas únicas. Ya seas un principiante o un entusiasta experimentado, nuestro taller de costura te ofrece la oportunidad de explorar el arte de la confección. En un ambiente acogedor, aprenderás desde lo básico hasta técnicas avanzadas mientras te sumerges en el emocionante universo de telas, agujas y diseño.</p>
                <p>¡Descubre el placer de transformar la tela en piezas únicas que reflejan tu estilo y creatividad en nuestro taller de costura!</p>
            </div>
            <div class="contenedor">
                <div class="informacion-atencion">
                    <p class="atencion-info">Horario</p>
                    <p class="atencion-contenido">(NO DISPONIBLE POR EL MOMENTO)</p>
                </div>
            </div>
            <div class="contenedor">
                <p><b><u>Si deseas inscribirte en alguno de estos talleres o tienes alguna duda, por favor contáctanos al siguiente número:</u></b></p>
                <div class="informacion-atencion">
                    <p class="atencion-info">Contacto</p>
                    <p class="atencion-contenido">667 172 6395</p>
                    <div class="medios">
                        <a class="atencion-contenido atencion-contenido-logo" href="tel:6671726395"> <img class="icono_atencion" src="/svg/phone.svg" alt="icono telefono">
                            <p class="atencion-contenido">Llamar</p>
                        </a>
                        <a class="atencion-contenido atencion-contenido-logo" href="https://wa.me/526671726395"> <img class="icono_atencion" src="/svg/whatsapp.svg" alt="icono whatsapp">
                            <p class="atencion-contenido"> Whatsapp</p>
                        </a>
                    </div>
                    <p class="atencion-info">Domicilio</p>
                    <a class="atencion-contenido atencion-contenido-direccion" href="https://maps.app.goo.gl/TU9w52Au6AXRFa297">
                        <img loading="lazy" src="/svg/ubicacion.svg" alt="ubicacion-icon">
                        <p>Arnulfo Rodríguez #5709 Norte. Col. Los Alamitos</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php incluirTemplate('footer'); ?>