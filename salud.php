<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<picture>
    <source srcset="/build/img/banner_salud.avif" type="image/avif">
    <source srcset="/build/img/banner_salud.webp" type="image/webp">
    <img loading="lazy" src="/build/img/banner_salud.jpg" alt="Banner salud" class="fondo">
</picture>
<main class="contenedor seccion">
    <section class="section">
        <div class="cuerpo">
            <div class="contenedor contenedor-caja">
                <p>Queridas familias…</p>
                <p>Cuidar de nuestra salud es fundamental. Ofrecemos servicios médicos completos, chequeos regulares
                    y asesoramiento personalizado para asegurarnos de que cada integrante familiar crezca fuerte y
                    saludable, sintiéndose seguros y sanos. Además, contamos con un equipo de profesionales amorosos
                    que se preocupan profundamente por el bienestar de nuestras familias.</p>
                <p>¡Tu salud es nuestra prioridad! Haz de cada día una oportunidad para cuidar de ti mismo y tu
                    familia.</p>
                <p>- CARITAS</p>
            </div>
            <div class="contenedor">
                <h2 class="subtitulo-center-rojo">Nuestra salud es primordial.</h2>
                <p>Cuidar nuestra salud es crucial ya que nos ayuda a prevenir enfermedades, mantener un
                    funcionamiento óptimo del cuerpo y mejorar la respuesta a tratamientos médicos. Adoptar hábitos
                    saludables, como una dieta equilibrada, ejercicio regular y evitar el consumo de sustancias
                    nocivas, fortalece nuestro sistema inmunológico y reduce el riesgo de desarrollar condiciones
                    crónicas como enfermedades cardíacas, diabetes o cáncer.</p>
                <p>Además, el cuidado preventivo y el seguimiento regular con profesionales de la salud permiten
                    detectar y tratar problemas de salud en etapas tempranas, aumentando las posibilidades de una
                    recuperación exitosa y una mejor calidad de vida a largo plazo.</p>
            </div>
            <div class="contenedor galeria-programas">
                <div class="galeria-programas-item">
                    <a href="/medico.php">
                        <picture>
                            <source srcset="/build/img/icono-medico.avif" type="image/avif">
                            <source srcset="/build/img/icono-medico.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/icono-medico.png" alt="Imagen 1" class="fondo">
                        </picture>
                        <h2 class="subtitulo-center-negro">Consultoria medico</h2>
                    </a>
                </div>
                <div class="galeria-programas-item">
                    <a href="/dental.php">
                        <picture>
                            <source srcset="/build/img/icono-dental.avif" type="image/avif">
                            <source srcset="/build/img/icono-dental.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/icono-dental.png" alt="Imagen 2" class="fondo">
                        </picture>
                    <h2 class="subtitulo-center-negro">Consultorio dental</h2>
                    </a>
                </div>
                <div class="galeria-programas-item">
                    <a href="/farmacia.php">
                        <picture>
                            <source srcset="/build/img/icono-farmacia.avif" type="image/avif">
                            <source srcset="/build/img/icono-farmacia.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/icono-farmacia.png" alt="Imagen 3" class="fondo">
                        </picture>
                    <h2 class="subtitulo-center-negro">Farmacia</h2>
                    </a>
                </div>
                <div class="galeria-programas-item">
                    <a href="/trabajo-social.php">
                        <picture>
                            <source srcset="/build/img/icono-social.avif" type="image/avif">
                            <source srcset="/build/img/icono-social.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/icono-social.png" alt="Imagen 4" class="fondo">
                        </picture>
                        <h2 class="subtitulo-center-negro">Trabajo Social</h2>
                    </a>
                </div>
            </div>
            <div class="contenedor">
                <h2 class="subtitulo-center-rojo">¿Cuál es el objetivo del programa?</h2>
                <p>Promover el bienestar integral a través de servicios médicos accesibles. Proporcionamos chequeos
                    médicos regulares, vacunas y talleres educativos para ayudar a las familias a mantener un estilo
                    de vida saludable. Nos comprometemos a trabajar juntos para construir un futuro más saludable y
                    feliz para los niños y sus seres queridos. Continuemos en este viaje hacia la salud y la
                    felicidad duradera.</p>
                <h2 class="subtitulo-center-rojo">¿Necesitas atención médica?</h2>
                <p>Si requieres de una atención más personalizada, dirígete al tipo de servicio que deseas recibir
                    (Menú principal > Programas > Salud > “Elige el servicio que necesitas”). Los horarios y costos
                    de cada servicio pueden variar dependiendo del tratamiento.</p>
                <br>
            </div>
        </div>
    </section>
</main>
<?php incluirTemplate('footer'); ?>