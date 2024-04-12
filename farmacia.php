<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<picture>
    <source srcset="/build/img/banner_farmacia.avif" type="image/avif">
    <source srcset="/build/img/banner_farmacia.webp" type="image/webp">
    <img loading="lazy" src="/build/img/banner_farmacia.jpg" alt="Banner farmacia" class="fondo">
</picture>
<main class="contenedor">
    <section class="section">
        <div class="cuerpo">

            <div class="Descripcion">
                <h2 class="titulo-center-rojo">INFORMACIÓN PENDIENTE</h2>
            </div>

            <div class="informacion-atencion">
                <p class="atencion-info">Horario de atención</p>
                <p class="atencion-contenido">Lunes A Viernes</p>
                <p class="atencion-contenido">09:00 am – 01:00 pm</p>
                <p class="atencion-info">Contacto directo</p>
                <p class="atencion-contenido">Medios disponibles</p>
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
                <p><a class="atencion-contenido" href="https://maps.app.goo.gl/TU9w52Au6AXRFa297"></a></p>
                <a class="atencion-contenido atencion-contenido-direccion" href="https://maps.app.goo.gl/TU9w52Au6AXRFa297">
                    <img loading="lazy" src="/svg/ubicacion.svg" alt="ubicacion-icon">
                    <p>Arnulfo Rodríguez #5709 Norte. Col. Los Alamitos</p>
                </a>
            </div>
        </div>
    </section>
</main>
<?php incluirTemplate('footer'); ?>