<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<picture>
    <source srcset="/build/img/banner_dental.avif" type="image/avif">
    <source srcset="/build/img/banner_dental.webp" type="image/webp">
    <img loading="lazy" src="/build/img/banner_dental.jpg" alt="Banner consultorio dental" class="fondo">
</picture>
<main class="contenedor">
    <section class="section">
        <section class="cuerpo">
            <section class="Descripcion">
                <h2 class="subtitulo-center-rojo">¡Dibujemos una sonrisa!</h2>
                <p>El cuidado bucal es fundamental para mantener una sonrisa saludable y prevenir enfermedades
                    dentales. Es importante cepillarse los dientes al menos dos veces al día, usar hilo dental
                    diariamente y visitar regularmente al dentista para chequeos y limpiezas profesionales.</p>
                <p>La prevención es clave en la salud bucal; al mantener una buena higiene oral y adoptar hábitos
                    saludables, podemos evitar problemas como caries, enfermedad de las encías y otras
                    complicaciones dentales. </p>
                <p>Recuerda que una sonrisa sana es un reflejo de tu bienestar general, por lo que no subestimes la
                    importancia de cuidar tu salud bucal.</p>
            </section>
            <section class="servicion">
                <h2 class="subtitulo-center-rojo">Servicios disponibles</h2>
                <p>Se ofrece orientación médica general a toda la población que requiera ser atendida por personal
                    de la salud, brindando asesoramiento acerca de la prevención de enfermedades, control de niño
                    sano, diagnósticos oportunos y seguimiento de enfermedades crónicas tales como Diabetes Mellitus
                    e Hipertensión arterial.</p>
                <section class="listas">
                    <div class="list">
                        <div class="detail-list">
                            <h3>Consulta con diagnóstico</h3>
                        </div>
                    </div>
                    <div class="list">
                        <div class="detail-list">
                            <h3>Aplicación de flúor</h3>
                        </div>
                    </div>
                    <div class="list">
                        <div class="detail-list">
                            <h3>Limpieza dental con técnica de cepillado</h3>
                        </div>
                    </div>
                    <div class="list">
                        <div class="detail-list">
                            <h3>Resinas</h3>
                        </div>
                    </div>
                </section>
                <section class="listas">
                    <div class="list">
                        <div class="detail-list">
                            <h3>Placas</h3>
                        </div>
                    </div>
                    <div class="list">
                        <div class="detail-list">
                            <h3>Porcelanas</h3>
                        </div>
                    </div>
                    <div class="list">
                        <div class="detail-list">
                            <h3>Coronas pediátricas extracciones</h3>
                        </div>
                    </div>
                    <div class="list">
                        <div class="detail-list">
                            <h3>Tratamiento de ortodoncia</h3>
                        </div>
                    </div>
                </section>
                <p>Acércate a nosotros, ¡te queremos ayudar!</p>
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
        </section>
    </section>
</main>
<?php incluirTemplate('footer'); ?>