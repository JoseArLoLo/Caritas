<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <h1 class="titulo-center-rojo" style="margin-top: 1rem;">Galeria</h1>
    <section class="section">
        <div class="contenedor">
            <div class="gallery">
                <img class="gallery-img" src="/build/img/1.jpg" alt="Miniatura 1" data-title="Título de la Imagen 1" data-description="Descripción de la Imagen 1">
                <img class="gallery-img" src="/build/img/1940.jpg" alt="Miniatura 1" data-title="Título de la Imagen 2" data-description="Descripción de la Imagen 2">
                <img class="gallery-img" src="/build/img/1951.jpg" alt="Miniatura 1" data-title="Título de la Imagen 3" data-description="Descripción de la Imagen 3">
                <img class="gallery-img" src="/build/img/1968.jpg" alt="Miniatura 1" data-title="Título de la Imagen 1" data-description="Descripción de la Imagen 1">
                <img class="gallery-img" src="/build/img/3.jpg" alt="Miniatura 1" data-title="Título de la Imagen 2" data-description="Descripción de la Imagen 2">
            </div>
        </div>

        <div class="modal">
            <div class="navigation">
                <button id="prevBtn">&lt; Anterior</button>
                <div class="presentable">
                    <span class="close">&times;</span>
                    <div class="modal-content">
                        <img id="modal-image" src="" alt="">
                        <div class="caption">
                            <h2 id="modal-title"></h2>
                            <p id="modal-description"></p>
                        </div>
                    </div>
                </div>
                <button id="nextBtn">Siguiente &gt;</button>
            </div>
        </div>
    </section>
</main>
<script>
    let currentIndex = 0;
    document.addEventListener('DOMContentLoaded', function() {
        const thumbnails = document.querySelectorAll('.gallery img');
        const modal = document.querySelector('.modal');
        const modalImage = document.getElementById('modal-image');
        const modalTitle = document.getElementById('modal-title');
        const modalDescription = document.getElementById('modal-description');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const closeBtn = document.querySelector('.close');

        // Función para mostrar el visualizador con la imagen ampliada
        function showModal(index) {
            modalImage.src = thumbnails[index].src;
            modalTitle.textContent = thumbnails[index].getAttribute('data-title');
            modalDescription.textContent = thumbnails[index].getAttribute('data-description');
            modal.style.display = 'block';
            currentIndex = index;
        }

        // Event listeners para miniaturas
        thumbnails.forEach((thumbnail, index) => {
            thumbnail.addEventListener('click', () => {
                showModal(index);
            });
        });
        // Función para cerrar el visualizador
    function closeModal() {
        modal.style.display = 'none';
    }

    // Función para mostrar la imagen anterior
    function showPrevImage() {
        currentIndex = (currentIndex - 1 + thumbnails.length) % thumbnails.length;
        showModal(currentIndex);
    }

    // Función para mostrar la siguiente imagen
    function showNextImage() {
        currentIndex = (currentIndex + 1) % thumbnails.length;
        showModal(currentIndex);
    }
    // Event listeners para botones de navegación
    prevBtn.addEventListener('click', showPrevImage);
    nextBtn.addEventListener('click', showNextImage);
    closeBtn.addEventListener('click', closeModal);
    });
    
</script>
<?php incluirTemplate('footer'); ?>