<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<picture>
    <source srcset="/build/img/banner_hogar.avif" type="image/avif">
    <source srcset="/build/img/banner_hogar.webp" type="image/webp">
    <img loading="lazy" src="/build/img/banner_hogar.jpg" alt="Banner hogar" class="fondo">
</picture>
<main class="contenedor seccion">
    <section class="section">
        <div class="cuerpo">
            <div class="contenedor">
                <h2 class="subtitulo-center-rojo">¡Dales una segunda vida a tus cosas!</h2>
                <p>En ocasiones, conservamos sin darnos cuenta una cantidad enorme de objetos en nuestra casa
                    sin
                    darle un mínimo uso, y con el pasar del tiempo, se empolvan quitando espacio en nuestro
                    hogar, o
                    peor aún, desechados en la basura.</p>
                <p>Donar artículos que ya no necesitamos o usamos activamente puede marcar una gran diferencia
                    en la
                    vida de quienes enfrentan dificultades económicas o necesidades básicas insatisfechas. Es
                    crucial reconocer la importancia de donar objetos que ya no se utilizan, y poder otorgarles
                    una segunda vida. Al hacerlo, brindamos oportunidades para que otros puedan beneficiarse de
                    esos
                    objetos. </p>
                <p>Además, al donar, fomentamos una cultura de solidaridad y generosidad en nuestra comunidad,
                    contribuyendo al bienestar colectivo y promoviendo la sostenibilidad al extender la vida
                    útil de
                    los objetos.</p>
            </div>
            <div class="contenedor">
                <h2 class="subtitulo-center-rojo">¡No los tires, dónalos!</h2>
                <p>Algo importante a tener en cuenta es que cada año, toneladas de objetos utilizables terminan
                    en
                    vertederos. Esta realidad subraya la urgencia de adoptar prácticas de donación más activas y
                    conscientes. Si evitamos desechar estos objetos, reduciremos el desperdicio y el impacto
                    ambiental, y además ofrecemos una mano amiga a quienes más lo necesitan.</p>
            </div>
            <div class="contenedor">
                <h2 class="subtitulo-center-rojo">¿Qué objetos puedo donar?</h2>
                <p>Aquí tienes una lista amplia de objetos que se pueden donar:</p>
                <ul class="lista-comun">
                    <li><p>Ropa en buen estado.</p></li>
                    <li><p>Calzado.</p></li>
                    <li><p>Juguetes y juegos.</p></li>
                    <li><p>Libros.</p></li>
                    <li><p>Artículos para el hogar, como utensilios de cocina, vajilla y electrodomésticos.</p></li>
                    <li><p>Muebles en condiciones aceptables.</p></li>
                    <li><p>Artículos de decoración para el hogar.</p></li>
                    <li><p>Ropa de cama y toallas.</p></li>
                    <li><p>Material escolar, como mochilas, lápices y cuadernos.</p></li>
                    <li><p>Equipos deportivos.</p></li>
                    <li><p>Productos de higiene personal y cuidado del bebé.</p></li>
                    <li><p>Instrumentos musicales.</p></li>
                    <li><p>Equipos electrónicos funcionales, como teléfonos móviles, tabletas o computadoras.</p></li>
                    <li><p>Material de arte y manualidades.</p></li>
                    <li><p>Productos de limpieza.</p></li>
                    <li><p>Ropa de invierno, como abrigos, bufandas y guantes.</p></li>
                    <li><p>Equipamiento para bebés, como cochecitos, cunas y sillas para el automóvil.</p></li>
                    <li><p>Suministros médicos, como sillas de ruedas, muletas y bastones.</p></li>
                    <li><p>Artículos de jardinería, como herramientas y macetas.</p></li>
                    <li><p>Herramientas de trabajo que promuevan (pendiente)</p></li>
                </ul>
            </div>
            <div class="contenedor">
                <h2 class="subtitulo-center-rojo">¡Conoce nuestro bazar!</h2>
                <p>Encuentra una amplia selección de artículos donados en excelente estado, desde ropa y zapatos
                    hasta juguetes y decoraciones, tenemos mucho lo que necesitas para tu hogar y tu familia.
                </p>
            </div>
            <div class="informacion-atencion">
                <p class="atencion-info">Horario de atención</p>
                <p class="atencion-contenido">Viernes</p>
                <p class="atencion-contenido">10:00 am – 11:30 am</p>
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