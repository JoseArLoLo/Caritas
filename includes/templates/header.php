<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta 
    name="description" 
    content="Pagina web oficial de caritas lomita I.A.P">
    <title>Cáritas Lomita I.A.P</title>
    <link rel="shortcut icon" href="/svg/logo caritas.svg">
    <link rel="stylesheet" href="/build/css/app.css">
</head>

<body <?php 
    if ($donar === true){
        echo 'style="background-color: #bf1616;"';
    } else if ($eventos === true){
        echo 'style="background-color: #1d1d1d;"';
    }else{
        echo 'style="background-color: #ffffff;"';
    }?>
    >
    <header class="header" <?php echo $eventos === true ?'style="background-color: #ffffff;"' : '';?>>
        <div class="superior">
            <div>
                <a href="/" class="logo">
                    <?php if ($donar === true) : ?>
                        <picture>
                            <source srcset="/build/img//logo2.avif" type="image/avif">
                            <source srcset="/build/img/logo2.webp" type="image/webp">
                            <img loading="lazy" class="logo-imagen" width="180" height="50" src="/build/img/logo2.jpg" alt="Logo Caritas Lomita IAP">
                        </picture>
                    <?php endif; ?>
                    <?php if ($donar === false) : ?>
                        <picture>
                            <source srcset="/build/img/logo.avif" type="image/avif">
                            <source srcset="/build/img/logo.webp" type="image/webp">
                            <img loading="lazy" class="logo-imagen" width="180" height="50" src="/build/img/logo.jpg" alt="Logo Caritas Lomita IAP">
                        </picture>
                    <?php endif; ?>
                </a>
            </div>
            <?php if ($donar === false) : ?>
                <div>
                    <a href="/donar.php" class="boton-donar">Donar Aqui</a>
                </div>
            <?php endif; ?>
        </div>
        <!-- <div class="button-wrapper">
      <button class="menu-toggle">Menu</button>
    </div> -->
        <div class="button-wrapper">
            <img class="menu-toggle barra" src="/svg/barras.svg" alt="Icono Responsive">
        </div>
        <nav class="menu">
            <ul>
                <li>
                    <a href="#">¿QUIENES SOMOS?</a>
                    <ul>
                        <li><a href="/about.php#nosotros">Nosotros</a></li>
                        <li><a href="/about.php#historia">Nuestra historia</a></li>
                        <li><a href="/about.php#nuestroinicio">Nuestro inicio</a></li>
                        <li><a href="/about.php#misionyvision">Misión y Visión</a></li>
                        <li><a href="/about.php#asociaciones">Asociaciones</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Programas</a>
                    <ul>
                        <li><a href="/parroquia.php">Parroquia</a></li>
                        <li>
                            <a href="#">Salud</a>
                            <ul>
                                <li><a href="/salud.php">Mas Información</a></li>
                                <li><a href="/medico.php">Consultorio Médico</a></li>
                                <li><a href="/dental.php">Consultorio Dental</a></li>
                                <li><a href="/farmacia.php">Farmacia</a></li>
                                <li><a href="/trabajo-social.php">Trabajo Social</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Alimentación</a>
                            <ul>
                                <li><a href="/alimentacion.php">Mas Información</a></li>
                                <li><a href="/despensas.php">Despensas</a></li>
                                <li><a href="/nutricion.php">Nutrición en la primer infancia</a></li>
                                <li><a href="/hogar.php">Hogar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Promocion de valores</a>
                            <ul>
                                <li><a href="/valores.php">Mas información</a></li>
                                <li><a href="/artes.php">Artes</a></li>
                                <li><a href="/asesorias.php">Asesorías</a></li>
                                <li><a href="/baile.php">Baile</a></li>
                                <!--<li><a href="#">Belleza</a></li>-->
                                <li><a href="/cocina.php">Cocina</a></li>
                                <li><a href="/computo.php">Cómputo</a></li>
                                <li><a href="/consultorio-psicologico.php">Consultorio Psicológico</a></li>
                                <li><a href="/costura.php">Costura</a></li>
                                <li><a href="/deportes.php">Deportes</a></li>
                                <li><a href="/formacion-humana.php">Formación Humana</a></li>
                                <li><a href="/Habilidades-socioemocionales.php">Habilidades Socioemocionales</a></li>
                                <!--<li><a href="#">Música</a></li>-->
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Noticias</a>
                    <ul>
                        <li><a href="/anuncios.php">Anuncios</a></li>
                        <li><a href="/eventos.php">Eventos</a></li>
                        <li><a href="/galeria.php">Galeria</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Ayuda</a>
                    <ul>
                        <li><a href="#">¿Cómo Ayudar?</a></li>
                        <li><a href="#">Preguntas Frecuentes</a></li>
                        <li><a href="#">Opiniones y sugerencias</a></li>
                        <li><a href="#">Testimonios</a></li>
                    </ul>
                </li>
                <li><a href="/contacto.php">¡Contactanos!</a></li>
            </ul>
        </nav>
    </header>