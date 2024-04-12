<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<picture>
    <source srcset="/build/img/banner_artes.avif" type="image/avif">
    <source srcset="/build/img/banner_artes.webp" type="image/webp">
    <img loading="lazy" src="/build/img/banner_artes.jpg" alt="Banner artes" class="fondo">
</picture>
<main class="contenedor seccion">
    <section class="section">
        <div class="cuerpo">
            <h2 class="subtitulo-left-negro" style="margin-bottom: 1rem;"><u>Talleres Disponibles</u></h2>
            <div class="contenedor">
                <h2 class="subtitulo-center-rojo">Manualidades</h2>
                <p>Al trabajar con su creatividad entrenan el lado derecho del cerebro, que es el responsable de las emociones, la sensibilidad estética, la visión espacial y la abstracción. Con todo ello, aprenden a expresar sus emociones y a mostrar el mundo tal como lo perciben.</p>
                <p>Despierta tu imaginación y habilidades manuales mientras exploras diversas técnicas de arte y creación. La expresión artística mejora la concentración, la coordinación y fomenta la autoexpresión.</p>
                <p>En esta clase aprenderás a hacer:</p>
                <div class="lista">
                    <div class="list">
                        <p><b>Figuras de origami o papiroflexia</b></p>
                    </div>
                    <div class="list">
                        <p><b>Adornos con fieltro o goma (EVA)</b></p>
                    </div>
                    <div class="list">
                        <p><b>Creación de sus propias joyas</b></p>
                    </div>
                    <div class="list">
                        <p><b>Bordado</b></p>
                    </div>
                    <div class="list">
                        <p><b>Cerámica</b></p>
                    </div>
                </div>
                <div class="informacion-atencion">
                    <p class="atencion-info">Horario</p>
                    <p class="atencion-contenido">Viernes</p>
                    <p class="atencion-contenido">05:00 pm – 06:00 pm</p>
                </div>
            </div>
            <div class="contenedor">
                <h2 class="subtitulo-center-rojo">Pintura</h2>
                <p>Aquí, cada trazo se convierte en una aventura creativa mientras exploramos colores, formas y expresiones artísticas. Diseñado especialmente para pequeños artistas, este taller fomenta la imaginación y la destreza manual, ofreciendo un espacio donde la creatividad florece con pinceles y colores vibrantes.</p>
                <p>¡Únete a nosotros para pintar sonrisas y descubrir el placer de crear obras maestras con las manos y el corazón!</p>
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