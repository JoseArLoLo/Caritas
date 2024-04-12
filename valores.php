<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<picture>
    <source srcset="/build/img/banner_valores.avif" type="image/avif">
    <source srcset="/build/img/banner_valores.webp" type="image/webp">
    <img loading="lazy" src="/build/img/banner_valores.jpg" alt="Banner salud" class="fondo">
</picture>
<main class="contenedor seccion">
    <section class="section">
        <div class="cuerpo">
            <div class="contenedor contenedor-caja">
                <p>A medida que las familias buscan enriquecer la vida de sus hijos y fortalecer los vínculos
                    familiares, la promoción de valores ofrece una oportunidad invaluable. Estos programas, al
                    ofrecer una variedad de talleres diseñados para cultivar virtudes como la empatía, crear un
                    entorno social y fomentar el trabajo en equipo, además de mejorar considerablemente el
                    crecimiento personal de los niños, y así promover una mayor unión familiar.</p>
                <p>Participar en estas actividades proporciona a las familias un espacio para reflexionar juntos,
                    fortalecer su comunicación y nutrir un ambiente de apoyo mutuo. Al participar en este tipo de
                    talleres, las familias no solo invierten en el desarrollo integral de sus hijos, sino que
                    también contribuyen al fortalecimiento de la comunidad en general, al incentivar valores
                    fundamentales que sustentan una sociedad más armoniosa y compasiva.</p>
                <p>- Caritas</p>
            </div>
            <div class="contenedor">
                <h2 class="subtitulo-center-rojo">¡Únete a nuestras actividades!</h2>
                <p>Descubre la magia de aprender juntos en nuestros emocionantes talleres diseñados para madres y
                    niños. Desde actividades que fortalecerán tu creatividad hasta emocionantes desafíos físicos y
                    mentales; nuestra programación ofrece una experiencia enriquecedora para toda la familia.</p>
            </div>
            <div class="contenedor">
                <h2 class="subtitulo-center-rojo">Conoce nuestros talleres</h2>
                <p>En Cáritas contamos con diferentes tipos y variedades de talleres enfocados para niños, madres y
                    familias donde también pueden convivir con más personas y pasar un momento agradable.</p>
            </div>
            <div class="contenedor galeria-programas">
                <div class="galeria-programas-item"> <!--class="sin-datos" para el que saldra mensaje pop up-->
                    <a href="/artes.php">
                        <picture>
                            <source srcset="/build/img/icono-artes.avif" type="image/avif">
                            <source srcset="/build/img/icono-artes.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/icono-artes.png" alt="icono artes" class="fondo">
                        </picture>
                        <h2 class="subtitulo-center-negro">Artes</h2>
                    </a>
                </div>
                <div class="galeria-programas-item">
                    <a href="/asesorias.php">
                        <picture>
                            <source srcset="/build/img/icono-asesorias.avif" type="image/avif">
                            <source srcset="/build/img/icono-asesorias.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/icono-asesorias.png" alt="icono asesorias" class="fondo">
                        </picture>
                        <h2 class="subtitulo-center-negro">Asesorias</h2>
                    </a>
                </div>
                <div class="galeria-programas-item">
                    <a href="/baile.php">
                        <picture>
                            <source srcset="/build/img/icono-advertencia.avif" type="image/avif">
                            <source srcset="/build/img/icono-advertencia.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/icono-advertencia.png" alt="Icono baile" class="fondo">
                        </picture>
                        <h2 class="subtitulo-center-negro">Baile</h2>
                    </a>
                </div>
                <div class="galeria-programas-item">
                    <a class="sin-datos">
                        <picture>
                            <source srcset="/build/img/icono-belleza.avif" type="image/avif">
                            <source srcset="/build/img/icono-belleza.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/icono-belleza.png" alt="icono belleza" class="fondo">
                        </picture>
                        <h2 class="subtitulo-center-negro">Belleza</h2>
                    </a>
                </div>
                <div class="galeria-programas-item">
                    <a href="/cocina.php">
                        <picture>
                            <source srcset="/build/img/icono-cocina.avif" type="image/avif">
                            <source srcset="/build/img/icono-cocina.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/icono-cocina.png" alt="icono cocina" class="fondo">
                        </picture>
                        <h2 class="subtitulo-center-negro">Cocina</h2>
                    </a>
                </div>
                <div class="galeria-programas-item">
                    <a href="/computo.php">
                        <picture>
                            <source srcset="/build/img/icono-computacion.avif" type="image/avif">
                            <source srcset="/build/img/icono-computacion.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/icono-computacion.png" alt="icono computacion" class="fondo">
                        </picture>
                        <h2 class="subtitulo-center-negro">Cómputo</h2>
                    </a>
                </div>
                <div class="galeria-programas-item">
                    <a href="/consultorio-psicologico.php">
                        <picture>
                            <source srcset="/build/img/icono-psicologico.avif" type="image/avif">
                            <source srcset="/build/img/icono-psicologico.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/icono-psicologico.png" alt="icono psicologico" class="fondo">
                        </picture>
                        <h2 class="subtitulo-center-negro">Consultorio Psicológico</h2>
                    </a>
                </div>
                <div class="galeria-programas-item">
                    <a href="/costura.php">
                        <picture>
                            <source srcset="/build/img/icono-costura.avif" type="image/avif">
                            <source srcset="/build/img/icono-costura.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/icono-costura.png" alt="icono costura" class="fondo">
                        </picture>
                        <h2 class="subtitulo-center-negro">Costura</h2>
                    </a>
                </div>
                <div class="galeria-programas-item">
                    <a href="/deportes.php">
                        <picture>
                            <source srcset="/build/img/icono-deportes.avif" type="image/avif">
                            <source srcset="/build/img/icono-deportes.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/icono-deportes.png" alt="icono deportes" class="fondo">
                        </picture>
                        <h2 class="subtitulo-center-negro">Deportes</h2>
                    </a>
                </div>
                <div class="galeria-programas-item">
                    <a href="/formacion-humana.php">
                        <picture>
                            <source srcset="/build/img/icono-formacion.avif" type="image/avif">
                            <source srcset="/build/img/icono-formacion.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/icono-formacion.png" alt="icono formacion humana" class="fondo">
                        </picture>
                        <h2 class="subtitulo-center-negro">Formación Humana</h2>
                    </a>
                </div>
                <div class="galeria-programas-item">
                    <a href="/Habilidades-socioemocionales.php">
                        <picture>
                            <source srcset="/build/img/icono-socio.avif" type="image/avif">
                            <source srcset="/build/img/icono-socio.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/icono-socio.png" alt="icono habilidades socioemocionales" class="fondo">
                        </picture>
                        <h2 class="subtitulo-center-negro">Habilidades Socioemocionales</h2>
                    </a>
                </div>
                <div class="galeria-programas-item">
                    <a class="sin-datos">
                        <picture>
                            <source srcset="/build/img/icono-musica.avif" type="image/avif">
                            <source srcset="/build/img/icono-musica.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/icono-musica.png" alt="icono musica" class="fondo">
                        </picture>
                        <h2 class="subtitulo-center-negro">Música</h2>
                    </a>
                </div>
            </div>
            <div class="contenedor">
                <h2 class="subtitulo-center-rojo">¿Deseas ser parte de algún taller?</h2>
                <p>Si estas interesado(a) en inscribirte en alguno de ellos, dirígete al taller que deseas (Menú
                    principal > Programas > Promoción de Valores > “Elige el taller al que deseas unirte”), revisa
                    toda la información disponible para conocer nuestros horarios y disponibilidad, y contáctanos
                    por teléfono o acude a nuestras oficinas.</p>
                <p>Únete a nosotros mientras exploramos, creamos recuerdos inolvidables y cultivamos conexiones
                    duraderas.</p>
                <p>¡No te pierdas esta oportunidad única de crecer y divertirte juntos!</p>
                <p><strong>IMPORTANTE: La disponibilidad de cada taller puede variar dependiendo de la demanda
                        del mismo.</strong></p>
            </div>
            <div id="overlay"></div>
            <div id="popup-container" class="fuente-secundaria">
                <span id="close-btn">&times;</span>
                <picture>
                    <source srcset="/build/img/icono-advertencia.avif" type="image/avif">
                    <source srcset="/build/img/icono-advertencia.webp" type="image/webp">
                    <img loading="lazy" src="/build/img/icono-advertencia.png" alt="icono advertencia" class="galeria-programas-item">
                </picture>
                <h2 class="titulo-interno-center-rojo">NO DISPONIBLE POR EL MOMENTO…</h2>
                <p>Si deseas que algún taller sea habilitado e impartido en Cáritas, comunícate con
                    nosotros para resolver tus dudas, y lo tomaremos en cuenta para nuestros próximos anuncios y
                    eventos.</p>
                <p>Horario de atención</p>
                <p>LUNES A VIERNES</p>
                <p>08:00 am – 04:00 pm</p>
                <p>Contacto directo</p>
                <a href="/contacto.php"><span>Contactate</span></a>
                <p>Domicilio</p>
                <p>Arnulfo Rodríguez #5709 Norte. Col. Los Alamitos</p>
            </div>
        </div>
    </section>
</main>
<script>
    const iconos = document.querySelectorAll('.sin-datos')
    iconos.forEach(item => {
        item.addEventListener('click', function() {
            document.getElementById('overlay').style.display = 'block';
            document.getElementById('popup-container').style.display = 'block';
            document.body.style.overflow = 'hidden';
        });
    })
    document.getElementById('close-btn').addEventListener('click', function() {
        document.getElementById('overlay').style.display = 'none';
        document.getElementById('popup-container').style.display = 'none';
        document.body.style.overflow = 'auto';
    });
</script>
<?php incluirTemplate('footer'); ?>