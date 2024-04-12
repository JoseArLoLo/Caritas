<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<picture>
    <source srcset="/build/img/banner_psico.avif" type="image/avif">
    <source srcset="/build/img/banner_psico.webp" type="image/webp">
    <img loading="lazy" src="/build/img/banner_psico.jpg" alt="Banner consultorio psicologico" class="fondo">
</picture>
<main class="contenedor seccion">
    <section class="section">
        <div class="cuerpo">
            <div class="contenedor">
                <p>¡Bienvenido al consultorio psicológico de nuestro taller!</p>
                <p>Aquí encontrarás un espacio seguro y confidencial para explorar tus pensamientos, emociones y preocupaciones.</p>
                <p>Nuestro equipo está aquí para brindarte apoyo emocional y orientación personalizada para ayudarte a enfrentar los desafíos de la vida. Ya sea que estés lidiando con el estrés, la ansiedad, la depresión u otros problemas emocionales, estamos aquí para ayudarte a desarrollar estrategias efectivas para superarlos.</p>
                <p>Nuestro objetivo es proporcionarte las herramientas y el apoyo necesarios para que puedas alcanzar una salud mental óptima y disfrutar de una vida plena y satisfactoria.</p>
                <p>¡No estás solo! Únete a nosotros y comienza tu viaje hacia el bienestar emocional y el crecimiento personal.</p>
                <p><strong>Público Objetivo:</strong> Público general.</p>
            </div>
            <div class="contenedor">
                <div class="informacion-atencion">
                    <p class="atencion-info">Horario</p>
                    <p class="atencion-contenido"><u>Martes</u></p>
                    <p class="atencion-contenido">04:00 pm – 05:00 pm</p>
                    <p class="atencion-contenido">05:00 pm – 06:00 pm</p>
                    <p class="atencion-contenido">06:00 pm – 07:00 pm</p>
                    <p class="atencion-contenido"><u>Miercoles</u></p>
                    <p class="atencion-contenido">04:00 pm – 05:00 pm</p>
                    <p class="atencion-contenido">05:00 pm – 06:00 pm</p>
                    <p class="atencion-contenido">06:00 pm – 07:00 pm</p>
                    <p class="atencion-contenido"><u>Viernes</u></p>
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