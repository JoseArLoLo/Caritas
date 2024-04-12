<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<picture>
    <source srcset="/build/img/banner_formacion.avif" type="image/avif">
    <source srcset="/build/img/banner_formacion.webp" type="image/webp">
    <img loading="lazy" src="/build/img/banner_formacion.jpg" alt="Banner deportes" class="fondo">
</picture>
<main class="contenedor seccion">
    <section class="section">
        <div class="cuerpo">
            <div class="contenedor">
                <p>La formación humana incluye diversos elementos de desarrollo del ser humano: espirituales, afectivos, cognitivos, etc.; está enfocada en potencializar el SER, tanto como la formación académica el saber y el saber hacer. implica que, en el acto del trabajo, el ser humano no se apropie solo de conocimientos, sino también de otros elementos que le permitan su desenvolvimiento como persona y como parte de la sociedad.</p>
                <p>Conéctate con tu sentido de empatía y responsabilidad social mientras aprendes sobre temas humanitarios y participas en actividades solidarias. Desarrolla una conciencia global y contribuye positivamente a tu comunidad.</p>
                <p>Cada aspecto de nuestro taller está diseñado para nutrir tu mente, cuerpo y espíritu, brindándote las herramientas y habilidades necesarias para prosperar en todas las áreas de tu vida.</p>
                <p>¡Únete a nosotros y descubre todo lo que puedes lograr!</p>
                <div class="informacion-atencion">
                    <p class="atencion-info">Horario</p>
                    <p class="atencion-contenido">Lunes</p>
                    <p class="atencion-contenido">04:00 pm – 05:00 pm</p>
                    <p class="atencion-contenido">05:00 pm – 06:00 pm</p>
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