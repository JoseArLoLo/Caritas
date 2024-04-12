<?php
require 'includes/funciones.php';
incluirTemplate('header', $donar = true, $eventos = false);
?>
<main>
    <div class="contenedor contenedor-pagos">
        <h2 class="titulo texto-mayuscula">Información de Pago</h2>
        <form action="#" method="post" class="pagos">
            <div class="campo">
                <label for="nombre">Nombre completo:</label>
                <input type="text" id="nombre" name="nombre" placeholder="nombre(s) apellido(s)" required>
            </div>
            <div class="campo">
                <label for="numero">Número de Tarjeta:</label>
                <input type="text" id="numero" name="numero" required>
            </div>
            <div class="campo">
                <label for="fecha">Fecha de Vencimiento:</label>
                <input type="text" id="fecha" name="fecha" placeholder="MM/AA" required>
            </div>
            <div class="campo">
                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" required>
            </div>
            <button type="submit">DONAR</button>
        </form>
        <a href="">
            <div class="extra">
                <p>Tambien puedes donar via paypal</p>
                <img src="/svg/paypal.svg" alt="donar por paypal">
            </div>
        </a>
    </div>
</main>
<?php incluirTemplate('footer'); ?>