<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<picture>
    <source srcset="/build/img/banner_cocina.avif" type="image/avif">
    <source srcset="/build/img/banner_cocina.webp" type="image/webp">
    <img loading="lazy" src="/build/img/banner_cocina.jpg" alt="Banner cocina" class="fondo">
</picture>
<main class="contenedor seccion">
    <section class="section">
        <div class="cuerpo">
            <p>Esta clase se hizo con la finalidad de estimular las funciones cognitivas a través del uso de la atención, la memoria, la planificación y la concentración al momento de preparar una comida. Ejercita la coordinación visual y los movimientos de las manos. Es una divertida manera de mantenerse entretenidos.</p>
            <p>Aprende a crear delicias culinarias desde cero, desde panes artesanales y exquisitos pasteles hasta tentadoras galletas. Descubre el placer de cocinar mientras desarrollas habilidades alimenticias, nutricionales y fáciles de preparar.</p>
            <div class="contenedor contenedor-lista">
                <ul>
                    <h4 class="titulo-interno-left-rojo">Repostería</h4>
                    <li>
                        <p>Galletas</p>
                    </li>
                    <li>
                        <p>Postres</p>
                    </li>
                    <li>
                        <p>Pasteles</p>
                    </li>
                </ul>
                <ul>
                    <h4 class="titulo-interno-left-rojo">Comida saludable</h4>
                    <li>
                        <p>Ceviche de soya</p>
                    </li>
                    <li>
                        <p>Salpicón de soya</p>
                    </li>
                    <li>
                        <p>Pan de zanahoria (avena)</p>
                    </li>
                </ul>
                <ul>
                    <h4 class="titulo-interno-left-rojo">Comida rápida</h4>
                    <li>
                        <p>Pizza</p>
                    </li>
                    <li>
                        <p>Hamburguesas</p>
                    </li>
                    <li>
                        <p>Hot Dogs</p>
                    </li>
                </ul>
            </div>
            <div class="contenedor">
                <div class="informacion-atencion">
                    <p class="atencion-info">Horario</p>
                    <p class="atencion-contenido">Martes</p>
                    <p class="atencion-contenido">04:00 pm – 05:00 pm (Niños)</p>
                    <p class="atencion-contenido">05:00 pm – 06:00 pm (Madres)</p>
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