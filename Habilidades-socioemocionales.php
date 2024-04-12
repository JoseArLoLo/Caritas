<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<picture>
    <source srcset="/build/img/banner_socio.avif" type="image/avif">
    <source srcset="/build/img/banner_socio.webp" type="image/webp">
    <img loading="lazy" src="/build/img/banner_socio.jpg" alt="Banner deportes" class="fondo">
</picture>
<main class="contenedor seccion">
    <section class="section">
        <div class="cuerpo">
            <div>
                <p>¡Únete a nuestra clase de habilidades socioemocionales y descubre cómo mejorar tu bienestar emocional y tus relaciones interpersonales!</p>
                <p>Aquí aprenderás habilidades prácticas para cultivar una mayor autoconciencia, empatía y habilidades de comunicación efectiva. Desde aprender a manejar el estrés y regular tus emociones hasta desarrollar relaciones saludables y fortalecer tu resiliencia, nuestras actividades interactivas y dinámicas te ayudarán a crecer y prosperar en tu vida personal y social.</p>
                <p>Ya sea que estés buscando mejorar tu autoestima, resolver conflictos de manera constructiva o simplemente conectarte más profundamente con los demás, este taller te brindará las herramientas y el apoyo que necesitas para alcanzar tus metas.</p>
                <h2 class="subtitulo-left-negro" style="margin-bottom: 1rem;"><u>Talleres Disponibles</u></h2>
            </div>
            <div class="contenedor">
                <h2 class="subtitulo-center-rojo">CONSULTORIO PSICOLÓGICO</h2>
                <p>Encontrarás un espacio seguro y confidencial para explorar tus pensamientos, emociones y preocupaciones.</p>
                <p>Nuestro equipo está aquí para brindarte apoyo emocional y orientación personalizada para ayudarte a enfrentar los desafíos de la vida. Ya sea que estés lidiando con el estrés, la ansiedad, la depresión u otros problemas emocionales, estamos aquí para ayudarte a desarrollar estrategias efectivas para superarlos.</p>
                <p>Nuestro objetivo es proporcionarte las herramientas y el apoyo necesarios para que puedas alcanzar una salud mental óptima y disfrutar de una vida plena y satisfactoria. ¡No estás solo!</p>
                <div class="informacion-atencion">
                <p class="atencion-info">Horario</p>
                    <p class="atencion-contenido">Jueves</p>
                    <p class="atencion-contenido">04:00 pm – 05:00 pm (Niños de 6 a 9 años)</p>
                    <p class="atencion-contenido">05:00 pm – 06:00 pm (Niños de 10 a 13 años)</p>
                    <p class="atencion-info">¡CITAS DISPONIBLES!</p>
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