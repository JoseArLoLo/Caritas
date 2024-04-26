<?php
require 'includes/funciones.php';

$db = conectarBD();

$query = "SELECT * FROM eventos ORDER BY id DESC LIMIT 3";
$consulta_eventos = mysqli_query($db, $query);

$query = "SELECT * FROM testimonios ORDER BY id DESC LIMIT 4";
$testimonios = mysqli_query($db, $query);

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
            <?php while ($evento = mysqli_fetch_assoc($consulta_eventos)) : ?>
                <a href="/evento.php?id=<?php echo $evento['id']; ?>" class="evento">
                    <img loading="lazy" class="evento-imagen" src="/uploads/eventos/<?php echo $evento['image']; ?>" alt="Imagen Evento">
                    <div class="evento-contenido">
                        <h2 class="subtitulo-left-negro"><?php echo $evento['title']; ?></h2>
                        <p><?php echo $evento['description']; ?></p>
                        <p class="evento-fecha"><?php echo fecha($evento['due']); ?></p>
                    </div>
                </a>
            <?php endwhile; ?>
        </div>
    </section>
    <img src="/svg/ondas-reverb2.svg" class="onda" alt="onda">
    <section class="section">
        <div class="contenedor-testimonios">
            <h1 class="titulo-center">Testimonios</h1>
            <div class="testimonios">
                <?php for ($i = 0; $i < 2; $i++) :
                    $testimonio = mysqli_fetch_assoc($testimonios);
                ?>
                    <div class="testimonio">
                        <div class="contedor-testimonio-img">
                            <img class="testimonio-img" width="200" height="200" src="/uploads/testimonios/<?php echo $testimonio['image']; ?>" alt="testimonio">
                        </div>
                        <div class="testimonio-info">
                            <h2 class="subtitulo-left-negro"><?php echo $testimonio['name']; ?></h2>
                            <p><?php echo $testimonio['info']; ?></p>
                            <h2 class="subtitulo-right-negro-2"><?php echo fecha($testimonio['publication']); ?></h2>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="testimonios">
                <?php while ($testimonio = mysqli_fetch_assoc($testimonios)) : ?>
                    <div class="testimonio">
                        <div class="contedor-testimonio-img">
                            <img class="testimonio-img" width="200" height="200" src="/uploads/testimonios/<?php echo $testimonio['image']; ?>" alt="testimonio">
                        </div>
                        <div class="testimonio-info">
                            <h2 class="subtitulo-left-negro"><?php echo $testimonio['name']; ?></h2>
                            <p><?php echo $testimonio['info']; ?></p>
                            <h2 class="subtitulo-right-negro-2"><?php echo fecha($testimonio['publication']); ?></h2>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="botones-testimonios">
                <button class="boton" onclick="moveSlide(-1)"> ❮ </button>
                <button class="boton" onclick="moveSlide(1)"> ❯ </button>
            </div>
        </div>
    </section>
</main>
<?php incluirTemplate('footer'); ?>