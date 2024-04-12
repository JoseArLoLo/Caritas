<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<picture>
    <source srcset="/build/img/banner_baile.avif" type="image/avif">
    <source srcset="/build/img/banner_baile.webp" type="image/webp">
    <img loading="lazy" src="/build/img/banner_baile.jpg" alt="Banner baile" class="fondo">
</picture>
<main class="contenedor seccion">
    <section class="section">
        <div class="cuerpo">
            <h2 class="subtitulo-left-negro" style="margin-bottom: 1rem;"><u>Talleres Disponibles</u></h2>
            <div class="contenedor">
                <h2 class="subtitulo-center-rojo">Ballet</h2>
                <p>Cada pequeña(o) bailarín y bailarina tiene la oportunidad de sumergirse en la gracia y la belleza de esta expresiva forma de arte. Nuestro taller de ballet no solo enseña los fundamentos técnicos, sino que también celebra la creatividad y la elegancia en cada movimiento. Con instructores apasionados y un ambiente lleno de alegría, descubrirán la magia de la danza, cultivando la expresión artística, la disciplina y la confianza en sí mismos.</p>
                <p>¡Acompáñanos en este viaje donde los sueños se convierten en pasos de baile y la diversión se entrelaza con la poesía del movimiento!</p>
                <div class="informacion-atencion">
                    <p class="atencion-info">Horario</p>
                    <p class="atencion-contenido">Martes</p>
                    <p class="atencion-contenido">05:00 pm – 06:00 pm</p>
                    <p class="atencion-contenido">Jueves</p>
                    <p class="atencion-contenido">06:00 pm – 07:00 pm</p>
                </div>
            </div>
            <div class="contenedor">
                <h2 class="subtitulo-center-rojo">Zumba</h2>
                <p>¡Únete a la fiesta de la salud y la diversión en nuestras vibrantes clases de Zumba, diseñadas para todo público! Aquí, la música contagiosa y los movimientos llenos de energía se fusionan para crear una experiencia de ejercicio única y emocionante.</p>
                <p>No importa tu nivel de habilidad o experiencia, la Zumba te invita a bailar, sudar y sonreír mientras trabajas en tu bienestar físico y mental. Con un ambiente amigable y contagioso, nuestros instructores te guiarán a través de coreografías llenas de ritmo que te harán olvidar que estás haciendo ejercicio.</p>
                <p>¡Prepárate para liberar el estrés, quemar calorías y disfrutar de una experiencia de fitness llena de alegría y vitalidad!</p>
                <div class="informacion-atencion">
                    <p class="atencion-info">Horario</p>
                    <p class="atencion-contenido">Miercoles</p>
                    <p class="atencion-contenido">06:00 pm – 07:00 pm</p>
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