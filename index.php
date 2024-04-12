<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<main>
    <section class="section">
        <div class="carrucel">
            <div class="overlay">
                <div class="contenedor contenido-slider">
                    <h2>Dar es recibir</h2>
                </div>
            </div>
            <div class="slider-frame">
                <ul>
                    <li>
                        <picture>
                            <source srcset="/build/img/1.avif" type="image/avif">
                            <source srcset="/build/img/1.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/1.jpg" alt="Imagen de carrucel">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <source srcset="/build/img/3.avif" type="image/avif">
                            <source srcset="/build/img/3.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/3.jpg" alt="Imagen de carrucel">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <source srcset="/build/img/1.avif" type="image/avif">
                            <source srcset="/build/img/1.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/1.jpg" alt="Imagen de carrucel">
                        </picture>
                    </li>
                    <li>
                        <picture>
                            <source srcset="/build/img/3.avif" type="image/avif">
                            <source srcset="/build/img/3.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/3.jpg" alt="Imagen de carrucel">
                        </picture>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section contenedor-informacion">
        <h1>142, 171</h1>
        <p>Servicios Asistenciales en 2023</p>
    </section>
    <img src="/svg/ondas 2.svg" class="onda" alt="onda">
    <section class="section contenedor-programas">
        <h1 class="titulo-center">Programas</h1>
        <div class="programas">
            <a href="/parroquia.php">
                <div class="programa">
                    <div class="programa-imagen">
                        <picture>
                            <source srcset="/build/img/icono-parroquia.avif" type="image/avif">
                            <source srcset="/build/img/icono-parroquia.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/icono-parroquia.jpg" alt="Icono parroquia">
                        </picture>
                    </div>
                    <div class="programa-detalles">
                        <h1>Parroquia</h1>
                    </div>
                </div>
            </a>
            <a href="/salud.php">
                <div class="programa">
                    <div class="programa-imagen">
                        <picture>
                            <source srcset="/build/img/icono-salud.avif" type="image/avif">
                            <source srcset="/build/img/icono-salud.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/icono-salud.jpg" alt="Icono Salud">
                        </picture>
                    </div>
                    <div class="programa-detalles">
                        <h1>Salud</h1>
                    </div>
                </div>
            </a>
            <a href="/alimentacion.php">
                <div class="programa">
                    <div class="programa-imagen">
                        <picture>
                            <source srcset="/build/img/icono-alimentacion.avif" type="image/avif">
                            <source srcset="/build/img/icono-alimentacion.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/icono-alimentacion.jpg" alt="Icono Alimentacion">
                        </picture>
                    </div>
                    <div class="programa-detalles">
                        <h1>Alimentación</h1>
                    </div>
                </div>
            </a>
            <a href="/valores.php">
                <div class="programa">
                    <div class="programa-imagen">
                        <picture>
                            <source srcset="/build/img/icono-valores.avif" type="image/avif">
                            <source srcset="/build/img/icono-valores.webp" type="image/webp">
                            <img loading="lazy" src="/build/img/icono-valores.jpg" alt="Icono Alimentacion">
                        </picture>
                    </div>
                    <div class="programa-detalles">
                        <h1>pro-valores</h1>
                    </div>
                </div>
            </a>
        </div>
    </section>
    <img src="/svg/ondas-reverb.svg" class="onda" alt="onda">
    <section class="section contenedor-eventos">
        <h1 class="titulo-center">Eventos</h1>
        <div class="eventos">
            <a href="/evento.php" class="evento">
                <img loading="lazy" class="evento-imagen" src="/build/img/1.jpg" alt="Imagen Evento">
                <div class="evento-contenido">
                    <h2 class="subtitulo-left-negro">Titulo</h2>
                    <p>
                        Descripcion corta: Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem tempore
                        quisquam, ipsam dolor unde tempora quod culpa nihil ratione! Quibusdam dicta necessitatibus
                        a nisi. Officia nulla quod maxime alias harum? Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Autem tempore quisquam, ipsam dolor unde tempora quod culpa nihil ratione!
                        Quibusdam dicta necessitatibus a nisi. Officia nulla quod maxime alias harum? Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Autem tempore quisquam, ipsam dolor unde
                        tempora quod culpa nihil ratione! Quibusdam dicta necessitatibus a nisi. Officia nulla quod
                        maxime alias harum?
                    </p>
                    <p class="evento-fecha">Fecha tentativa del evento</p>
                </div>
            </a>
            <a href="/evento.php" class="evento">
                <img loading="lazy" class="evento-imagen" src="/build/img/1.jpg" alt="Imagen Evento">
                <div class="evento-contenido">
                    <h2 class="subtitulo-left-negro">Titulo</h2>
                    <p>
                        Descripcion corta: Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem tempore
                        quisquam, ipsam dolor unde tempora quod culpa nihil ratione! Quibusdam dicta necessitatibus
                        a nisi. Officia nulla quod maxime alias harum? Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Autem tempore quisquam, ipsam dolor unde tempora quod culpa nihil ratione!
                        Quibusdam dicta necessitatibus a nisi. Officia nulla quod maxime alias harum? Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Autem tempore quisquam, ipsam dolor unde
                        tempora quod culpa nihil ratione! Quibusdam dicta necessitatibus a nisi. Officia nulla quod
                        maxime alias harum?
                    </p>
                    <p class="evento-fecha">Fecha tentativa del evento</p>
                </div>
            </a>
            <a href="/evento.php" class="evento">
                <img loading="lazy" class="evento-imagen" src="/build/img/1.jpg" alt="Imagen Evento">
                <div class="evento-contenido">
                    <h2 class="subtitulo-left-negro">Titulo</h2>
                    <p>
                        Descripcion corta: Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem tempore
                        quisquam, ipsam dolor unde tempora quod culpa nihil ratione! Quibusdam dicta necessitatibus
                        a nisi. Officia nulla quod maxime alias harum? Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Autem tempore quisquam, ipsam dolor unde tempora quod culpa nihil ratione!
                        Quibusdam dicta necessitatibus a nisi. Officia nulla quod maxime alias harum? Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Autem tempore quisquam, ipsam dolor unde
                        tempora quod culpa nihil ratione! Quibusdam dicta necessitatibus a nisi. Officia nulla quod
                        maxime alias harum?
                    </p>
                    <p class="evento-fecha">Fecha tentativa del evento</p>
                </div>
            </a>
        </div>
    </section>
    <img src="/svg/ondas-reverb2.svg" class="onda" alt="onda">
    <section class="section">
        <div class="contenedor-testimonios">
            <h1 class="titulo-center">Testimonios</h1>
            <div class="testimonios">
                <div class="testimonio">
                    <img class="testimonio-img" src="/build/img/icono-asesorias.png" alt="testimonio">
                    <div class="testimonio-info">
                        <h2 class="subtitulo-left-negro">Nombre 1</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit minus molestias facere a? Repellendus omnis exercitationem, reiciendis culpa voluptatem aut sit debitis, dolore veritatis nobis iure fugit maxime commodi nostrum?</p>
                        <h2 class="subtitulo-right-negro">Fecha</h2>
                    </div>
                </div>
                <div class="testimonio">
                    <img class="testimonio-img" src="/build/img/icono-asesorias.png" alt="testimonio">
                    <div class="testimonio-info">
                        <h2 class="subtitulo-left-negro">Nombre 2</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit minus molestias facere a? Repellendus omnis exercitationem, reiciendis culpa voluptatem aut sit debitis, dolore veritatis nobis iure fugit maxime commodi nostrum?</p>
                        <h2 class="subtitulo-right-negro">Fecha</h2>
                    </div>
                </div>
            </div>
            <div class="testimonios">
                <div class="testimonio">
                    <img class="testimonio-img" src="/build/img/icono-asesorias.png" alt="testimonio">
                    <div class="testimonio-info">
                        <h2 class="subtitulo-left-negro">Nombre 3</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit minus molestias facere a? Repellendus omnis exercitationem, reiciendis culpa voluptatem aut sit debitis, dolore veritatis nobis iure fugit maxime commodi nostrum?</p>
                        <h2 class="subtitulo-right-negro">Fecha</h2>
                    </div>
                </div>
                <div class="testimonio">
                    <img class="testimonio-img" src="/build/img/icono-asesorias.png" alt="testimonio">
                    <div class="testimonio-info">
                        <h2 class="subtitulo-left-negro">Nombre 4</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit minus molestias facere a? Repellendus omnis exercitationem, reiciendis culpa voluptatem aut sit debitis, dolore veritatis nobis iure fugit maxime commodi nostrum?</p>
                        <h2 class="subtitulo-right-negro">Fecha</h2>
                    </div>
                </div>
            </div>
            <div class="botones-testimonios">
                <button class="boton" onclick="moveSlide(-1)"> ❮ </button>
                <button class="boton" onclick="moveSlide(1)"> ❯ </button>
            </div>
        </div>
    </section>
</main>
<?php incluirTemplate('footer'); ?>