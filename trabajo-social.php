<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<picture>
    <source srcset="/build/img/banner_social.avif" type="image/avif">
    <source srcset="/build/img/banner_social.webp" type="image/webp">
    <img loading="lazy" src="/build/img/banner_social.jpg" alt="Banner farmacia" class="fondo">
</picture>
<main class="contenedor">
    <section class="section">
        <div class="cuerpo">
            <div class="Descripcion">
                <h2 class="subtitulo-center-rojo">¡Apoyando tu bienestar!</h2>
                <p>El área de trabajo social atiende necesidades específicas que presentan las familias más necesitadas en un momento de vulnerabilidad. Mediante una previa investigación (estudio socioeconómico) se determina el apoyo a otorgar; los servicios que están presentes en este departamento son variados, ya que las personas que acuden a nosotros tienen un sin número de situaciones que afectan su calidad de vida, entorno, hogar y familia, a lo cual se apoya según el caso lo amerite.</p>
            </div>
            <div class="Descripcion">
                <h2 class="subtitulo-center-rojo">Casos especiales</h2>
                <p>Su objetivo es brindar atención, información y orientación a personas de escasos recursos con problemas de salud y necesidades específicas para contribuir a mejorar su calidad de vida, como me</p>
                <h2 class="subtitulo-center-rojo">¿Qué apoyos puedo recibir como Caso Especial?</h2>
                <p>Dentro de los apoyos se encuentran:</p>
                <div class="lista">
                    <div class="list">
                        <div class="detail-list">
                            <p><b>Apoyo a beneficiarios que no cuentan con el recurso total en la compra de medicamentos</b></p>
                        </div>
                    </div>
                    <div class="list">
                        <div class="detail-list">
                            <p><b>Apoyo en realización de estudios de laboratorio, rayos x, ultrasonido, resonancia magnética, tomografía, etc.</b></p>
                        </div>
                    </div>
                    <div class="list">
                        <div class="detail-list">
                            <p><b>Consulta oftalmológica gratuita (Buena Vista I.A.P.)</b></p>
                        </div>
                    </div>
                    <div class="list">
                        <div class="detail-list">
                            <p><b>Entregas de despensa</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Descripcion" style="margin-top: 2rem;">
                <h2 class="subtitulo-center-rojo">Adultos mayores</h2>
                <p>Su objetivo es incidir en situaciones de necesidad para el adulto mayor con el fin de mejorar su calidad de vida, garantizando un acceso equitativo a servicios de salud. De esta forma, promovemos la adherencia a tratamientos médicos y así, facilitar la gestión de los aspectos emocionales y sociales relacionados con el envejecimiento, mediante orientación médica que evalúe síntomas de vías respiratorias, hipertensión arterial y diabetes Mellitus.</p>
                <p class="bold">Aplica para adultos mayores con 60 años de edad en adelante, y que no cuenten con acceso a seguridad social.</p>
                <h2 class="subtitulo-center-rojo">Mujeres Embarazadas</h2>
                <p>Su objetivo es contribuir e impactar de manera directa en la disminución de tasa de mortalidad de mujeres y niños en proceso de gestación, mediante la detección, monitoreo e intervención oportuna y coordinada de un equipo multidisciplinario de salud.</p>
                <p class="bold">Aplica desde el momento que tengan conocimiento de su embarazo, y que no cuenten con acceso a seguridad social.</p>
                <h2 class="subtitulo-center-rojo">¿Cuáles son los requisitos para recibir el apoyo?</h2>
                <p>Deberá acudir a las oficinas de Cáritas, en el área de “Trabajo social”, donde se aplicará un estudio socioeconómico, con el cual se determinará el apoyo a otorgar. La documentación necesaria es la siguiente:</p>
                <div class="lista">
                    <div class="list">
                        <div class="detail-list">
                            <p><b>Credencial de Elector o Carta de Identidad (una copia)</b></p>
                        </div>
                    </div>
                    <div class="list">
                        <div class="detail-list">
                            <p><b>Diagnóstico médico o nota médica (una copia)</b></p>
                        </div>
                    </div>
                    <div class="list">
                        <div class="detail-list">
                            <p><b>Orden o receta médica (dos copias)</b></p>
                        </div>
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
        </div>
    </section>
</main>
<?php incluirTemplate('footer'); ?>