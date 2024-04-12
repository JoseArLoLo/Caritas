<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<picture>
    <source srcset="/build/img/banner_nuticion.avif" type="image/avif">
    <source srcset="/build/img/banner_nuticion.webp" type="image/webp">
    <img loading="lazy" src="/build/img/banner_nuticion.jpg" alt="Banner nutricion" class="fondo">
</picture>
<main class="contenedor seccion">
    <section class="section">
        <div class="cuerpo">
            <div class="contenedor">
                <h2 class="subtitulo-center-rojo">La infancia es la etapa más importante.</h2>
                <p>El Programa de Nutrición en la Primera Infancia, atiende los problemas de malnutrición desde
                    el
                    embarazo hasta los 6 años de vida. La malnutrición durante esta etapa puede afectar el
                    crecimiento y desarrollo de los niños, y se relaciona con mayor riesgo de presentar
                    infecciones
                    respiratorias, diarrea, retraso en el crecimiento físico y cognitivo, siendo este un periodo
                    crítico para el desarrollo de sus habilidades motrices, cognitivas, lingüísticas y
                    socioemocionales, generando un impacto en el estado de salud de manera permanente.</p>
            </div>
            <div class="contenedor">
                <h2 class="subtitulo-center-rojo">¿Cómo se combate esta problemática?</h2>
                <p>El programa está dirigido a la atención de mujeres embarazadas y niños de 0 a 6 años. </p>
                <p>Se realiza un censo en las comunidades para determinar el grado de inseguridad alimentaria de
                    las
                    familias. Al realizar el censo, se evalúa al infante para determinar si presentan un grado
                    de
                    desnutrición (bajo peso, baja talla) y/o anemia. </p>
                <p>Al tener la comunidad identificada que ingresará al programa, se calendarizan pláticas en
                    materia
                    de nutrición con los padres y/o tutores del menor de manera mensual y toma de mediciones a
                    los
                    niños del programa y con base a sus resultados se otorga un desparasitante, multivitamínico
                    y/o
                    hierro para combatir el problema antes mencionado, se entrega un paquete de pañales de
                    manera
                    mensual (de acuerdo a la edad), así como de manera quincenal se apoya con un paquete de
                    alimentos.</p>
            </div>
            <div class="contenedor">
                <h2 class="subtitulo-center-rojo">¿Cómo puedo aportar a esta problemática?</h2>
                <p>Puedes aportar de manera económica a las cuentas de Cáritas (especificando que es para el
                    programa) o en especie donando los siguientes artículos:</p>
                <ul class="lista-comun">
                    <li><p>Alimentos: atún, avena, harina de trigo, harina de maíz, aceite, ensalada de verduras en
                        lata, leche.</p></li>
                    <li><p>Granos: frijol, garbanzo, arroz, lenteja.</p></li>
                    <li><p>Artículos de higiene: jabón, toallas húmedas, pasta dental, desodorantes.</p></li>
                    <li><p>Pañales: desde recién nacido hasta etapa 6.</p></li>
                </ul>
            </div>
            <div class="contenedor">
                <h2 class="subtitulo-center-rojo">Frase con valor cristiano </h2>
                <p>Recordemos las palabras de Jesús, quien dijo: “Dejen que los niños vengan a mí, y no se lo
                    impidan, porque el reino de Dios es de quienes son como ellos”. Alimentar el cuerpo y nutrir
                    el
                    alma de los más pequeños es una forma de acercarlos al amor de Dios. Apoyemos la nutrición
                    infantil con generosidad y compasión, para que cada niño pueda crecer fuerte y saludable,
                    preparado para seguir el camino que Dios tiene para ellos. </p>
            </div>
            <div class="informacion-atencion">
                <p class="atencion-info">Horario de atención</p>
                <p class="atencion-contenido">Lunes A Viernes</p>
                <p class="atencion-contenido">07:30 am – 03:30 pm</p>
                <p class="atencion-contenido">Sabado</p>
                <p class="atencion-contenido">09:00 am – 01:00 pm</p>
                <p class="atencion-info">Contacto directo</p>
                <p class="atencion-contenido">Medios disponibles</p>
                <p class="atencion-contenido">667 749 4051</p>
                <div class="medios">
                    <a class="atencion-contenido atencion-contenido-logo" href="tel:6677494051"> <img class="icono_atencion" src="/svg/phone.svg" alt="icono telefono">
                        <p class="atencion-contenido">Llamar</p>
                    </a>
                    <a class="atencion-contenido atencion-contenido-logo" href="https://wa.me/526677494051"> <img class="icono_atencion" src="/svg/whatsapp.svg" alt="icono whatsapp">
                        <p class="atencion-contenido"> Whatsapp</p>
                    </a>
                </div>
                <p class="atencion-info">Domicilio</p>
                <p><a class="atencion-contenido" href="https://maps.app.goo.gl/Ncn2BpDRRH79xjsDA"></a></p>
                <a class="atencion-contenido atencion-contenido-direccion" href="https://maps.app.goo.gl/Ncn2BpDRRH79xjsDA">
                    <img loading="lazy" src="/svg/ubicacion.svg" alt="ubicacion-icon">
                    <p>Blvd. Providencia #2475 Providencia, C.P. 80290, Culiacán Rosales, Sinaloa.</p>
                </a>
            </div>
        </div>
    </section>
</main>
<?php incluirTemplate('footer'); ?>