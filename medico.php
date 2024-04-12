<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<picture>
    <source srcset="/build/img/banner_medico.avif" type="image/avif">
    <source srcset="/build/img/banner_medico.webp" type="image/webp">
    <img loading="lazy" src="/build/img/banner_medico.jpg" alt="Banner consultorio medico" class="fondo">
</picture>
<main class="contenedor">
    <section class="section">
        <div class="cuerpo">
            <section class="Descripcion">
                <h2 class="subtitulo-center-rojo">¡Te queremos bien!</h2>
                <p>La atención médica y la salud son pilares fundamentales para el bienestar de cada individuo. Es vital comprender que la prevención y el cuidado temprano son esenciales para mantener una vida plena y saludable. No debemos subestimar la importancia de las visitas regulares al médico, la adopción de hábitos saludables y la búsqueda de ayuda profesional cuando sea necesario.</p>
                <p>Al priorizar nuestra salud y tomar medidas proactivas, podemos prevenir enfermedades, detectar problemas en etapas tempranas y mejorar nuestra calidad de vida.</p>
                <p>Recuerda que invertir en tu salud es invertir en tu futuro.</p>
            </section>
            <section class="servicion">
                <h2 class="subtitulo-center-rojo">Servicios disponibles</h2>
                <p>Se ofrece orientación médica general a toda la población que requiera ser atendida por personal de la salud, brindando asesoramiento acerca de la prevención de enfermedades, control de niño sano, diagnósticos oportunos y seguimiento de enfermedades crónicas tales como Diabetes Mellitus e Hipertensión arterial.</p>
                <p>También otorgamos:</p>
                <div class="listas">
                    <div class="list">
                        <div class="detail-list">
                            <h3>Toma de signos vitales</h3>
                        </div>
                    </div>
                    <div class="list">
                        <div class="detail-list">
                            <h3>Control de embarazo</h3>
                        </div>
                    </div>
                    <div class="list">
                        <div class="detail-list">
                            <h3>Aplicación de inyecciones</h3>
                        </div>
                    </div>
                    <div class="list">
                        <div class="detail-list">
                            <h3>Retiro de puntos y sondas</h3>
                        </div>
                    </div>
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
            </section>
        </div>
    </section>
</main>
<?php incluirTemplate('footer'); ?>