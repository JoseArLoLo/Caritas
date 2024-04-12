<?php
require 'includes/funciones.php';
incluirTemplate('header', $donar = false, $eventos = true);
?>
<main class="contenedor seccion">
    <section class="section contenedor-eventos" style="margin-top: 1rem;">
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
</main>
<?php incluirTemplate('footer'); ?>