<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">

    <section class="section">
        <h1 class="titulo-center-rojo" style="margin-top: 1rem;">¿Cómo Ayudar?</h1>
        <div class="contenedor">
            <div class="contenedor-ayuda">
                <div class="ayuda-item">
                    <picture>
                        <source srcset="/build/img/reloj.avif" type="image/avif">
                        <source srcset="/build/img/reloj.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/reloj.png" alt="Imagen" class="ayuda-item-image">
                    </picture>
                    <div class="ayuda-item-info">
                        <h3 class="ayuda-item-titulo">Dona tu tiempo:</h3>
                        <p class="ayuda-item-texto">Realiza tu servicio social o voluntario en cualquiera de nuestras instalaciones de programas asistenciales, pregunta cómo.</p>
                    </div>
                </div>
                <div class="ayuda-item">
                    <picture>
                        <source srcset="/build/img/medicinas.avif" type="image/avif">
                        <source srcset="/build/img/medicinas.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/medicinas.png" alt="Imagen" class="ayuda-item-image">
                    </picture>
                    <div class="ayuda-item-info">
                        <h3 class="ayuda-item-titulo">Dona en especie:</h3>
                        <p class="ayuda-item-texto">Aporta alimentos no perecederos, medicamentos, ropa o enseres domésticos para brindarles un mejor nivel de vida a nuestros beneficiarios.</p>
                    </div>
                </div>
                <div class="ayuda-item">
                    <picture>
                        <source srcset="/build/img/alcancia.avif" type="image/avif">
                        <source srcset="/build/img/alcancia.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/alcancia.png" alt="Imagen" class="ayuda-item-image">
                    </picture>
                    <div class="ayuda-item-info">
                        <h3 class="ayuda-item-titulo">Dona recursos económicos:</h3>
                        <p class="ayuda-item-texto">Conviértete en un donante permanente o eventual aportando un importe económico, que se aprovechará para el buen funcionamiento de nuestra Institución y sus programas.</p>
                    </div>
                </div>
                <div class="ayuda-item">
                    <picture>
                        <source srcset="/build/img/empresas.avif" type="image/avif">
                        <source srcset="/build/img/empresas.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/empresas.png" alt="Imagen" class="ayuda-item-image">
                    </picture>
                    <div class="ayuda-item-info">
                        <h3 class="ayuda-item-titulo">Si eres una empresa...</h3>
                        <p class="ayuda-item-texto">Aporta económicamente.</p>
                        <p class="ayuda-item-texto">Aporta tu donativo en especie.</p>
                        <p class="ayuda-item-texto">Apoya con mantenimiento en instalaciones.</p>
                        <p class="ayuda-item-texto">Integra tu equipo de voluntariado corporativo.</p>
                    </div>
                </div>
                <div class="ayuda-item">
                    <picture>
                        <source srcset="/build/img/profesionista.avif" type="image/avif">
                        <source srcset="/build/img/profesionista.webp" type="image/webp">
                        <img loading="lazy" src="/build/img/profesionista.png" alt="Imagen" class="ayuda-item-image">
                    </picture>
                    <div class="ayuda-item-info">
                        <h3 class="ayuda-item-titulo">Si eres un profesionista...</h3>
                        <p class="ayuda-item-texto">Dona tus conocimientos.</p>
                        <p class="ayuda-item-texto">Dona tu talento.</p>
                        <p class="ayuda-item-texto">Dona tus habilidades.</p>
                    </div>
                </div>
            </div>
            <div class="informacion-atencion">
                <h2 style="margin-top:1rem" class="subtitulo-center-rojo">¿Estas interesado?</h2>
                <h2 style="margin-top:1rem" class="subtitulo-center-rojo">¡Contactanos!</h2>
                <div class="medios medios-esp">
                    <a class="atencion-contenido atencion-contenido-logo" href="https://wa.me/526671726395"> <img class="icono_atencion" src="/svg/whatsapp.svg" alt="icono whatsapp">
                        <p class="atencion-contenido">Whatsapp</p>
                    </a>
                    <a class="atencion-contenido atencion-contenido-logo" href="mailto:contacto@caritasdiocesana.org?Subject=Quiero%20ayudar%20en%20Caritas%20diocesana"> <img class="icono_atencion" src="/svg/correo.svg" alt="icono whatsapp">
                        <p class="atencion-contenido">Correo</p>
                    </a>
                </div>
            </div>
        </div>

    </section>
</main>
<?php incluirTemplate('footer'); ?>