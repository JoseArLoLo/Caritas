<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<picture>
    <source srcset="/build/img/banner_computo.avif" type="image/avif">
    <source srcset="/build/img/banner_computo.webp" type="image/webp">
    <img loading="lazy" src="/build/img/banner_computo.jpg" alt="Banner computo" class="fondo">
</picture>
<main class="contenedor seccion">
    <section class="section">
        <div class="cuerpo">
            <div class="contenedor">
                <p>¡Descubre el poder de la tecnología en nuestro emocionante taller de computación!</p>
                <p>Comprender los principios de la computación se ha convertido de manera rápida en una habilidad esencial. Brinda a las personas una comprensión profunda de cómo la tecnología afecta sus vidas, los empodera para convertirse en participantes plenos de la sociedad y abre una amplia gama de oportunidades profesionales.</p>
                <p>Aprende habilidades prácticas que te ayudarán a navegar con confianza en el mundo digital de hoy. Conocer y aprender las herramientas básicas como lo son Word, Excel y Power Point, este taller te proporcionará las habilidades necesarias para triunfar en cualquier campo.</p>
                <p>¡No te pierdas la oportunidad de potenciar tu conocimiento y ampliar tus horizontes con nosotros!</p>
                <p>¡Inscríbete ahora y prepárate para elevar tu potencial al máximo!</p>
            </div>
            <div class="contenedor">
                <div class="informacion-atencion">
                    <p class="atencion-info">Horario</p>
                    <p class="atencion-contenido">Martes Y Miercoles</p>
                    <p class="atencion-contenido">04:00 pm – 05:00 pm (Madres)</p>
                    <p class="atencion-contenido">05:00 pm – 06:00 pm (Niños de 6 a 9 años)</p>
                    <p class="atencion-contenido">06:00 pm – 07:00 pm (Niños de 10 a 13 años)</p>
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