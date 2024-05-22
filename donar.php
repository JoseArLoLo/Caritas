<?php
require 'includes/funciones.php';
incluirTemplate('header', $donar = true, $eventos = false);
?>
<main>
    <div class="contenedor contenedor-pagos">
        <h2 class="titulo texto-mayuscula">Información de Pago</h2>
        <form action="#" method="post" class="pagos" id="card-form">
            <input type="hidden" name="conektaTokenId" id="conektaTokenId" value="">
            <div class="campo">
                <label for="name">Nombre Completo:</label>
                <input data-conekta="card[name]" type="text" id="name" name="name" placeholder="Nombre(s) y apellido(s)" required>
            </div>
            <div class="campo">
                <label for="email">Correo:</label>
                <input type="email" name="email" id="email" maxlength="200" placeholder="Correo electronico" required>
            </div>
            <div class="campo">
                <label for="card">Número de Tarjeta:</label>
                <input type="text" maxlength="16" data-conekta="card[number]" name="card" id="card" placeholder="Número de tarjeta" required>
            </div>
            <div class="campo">
                <label for="fecha">Fecha de Vencimiento:</label>
                <center>
                    <input type="text" id="month" maxlength="2" data-conekta="card[exp_month]" class="esp" placeholder="Mes" required>
                    <span>/</span>
                    <input type="text" id="year" maxlength="2" data-conekta="card[exp_year]" class="esp" placeholder="Año" required>
                </center>
            </div>
            <div class="campo">
                <label>CVC</label>
                <input type="text" maxlength="4" data-conekta="card[cvc]" required>
            </div>
            <div class="campo">
                <label for="total">MONTO:</label>
                <input type="number" name="total" id="total" min="10" max="1000000" oninput="validateAmount(this)" required>
            </div>
            <input type="text" hidden name="description" id="description" value="Donativo">
            <button id="boton-donar" class="btn-donar btn btn-success btn-lg">DONAR</button>
        </form>
    </div>
</main>
<script>
    var boton = document.getElementById("boton-donar");
    Conekta.setPublicKey("key_Mj1QTbILuGHuZqm70znFahZ"); // Llave publica de conekta
    boton.disabled = false;
    var conektaSuccessResponseHandler = function(token) {
        $('#conektaTokenId').val(token.id);
        jsPay();
        // console.log(token.id);
    }
    var conektaErrorResponseHandler = function(response) {
        var form = $('#card-form');
        alert("Hubo un error en los datos de la tarjeta");
        boton.disabled = false;
    }
    $(document).ready(function() {
        $('#card-form').submit(function(e) {
            boton.disabled = true;
            e.preventDefault();
            var form = $('#card-form');
            Conekta.Token.create(form, conektaSuccessResponseHandler, conektaErrorResponseHandler);
        });
    });

    function jsPay() {
        let params = $('#card-form').serialize();
        let url = 'pay.php';

        $.ajax({
            type: 'POST',
            url: url,
            data: params,
            success: function(data) {
                if (data == 1) {
                    jsClean();
                    window.location.href = 'agradecimiento.php';
                    boton.disabled = false;
                } else {
                    alert("Hubo un error al intentar usar la tarjeta");
                    boton.disabled = false;
                }
            }
        });
    }

    function jsClean() {
        $('.form-control').prop('value', '');
        $('#conektaTokenId').prop('value', '');
    }

    function validateAmount(input) {
        const min = 10;
        const max = 1000000;
        let value = parseInt(input.value, 10);

        if (isNaN(value)) {
            input.value = '';
        } else if (value < min) {
            input.value = min;
        } else if (value > max) {
            input.value = max;
        }
    }

    function validateMonth(input) {
        let value = parseInt(input.value, 10);

        if (isNaN(value) || value < 1 || value > 12) {
            input.classList.add('error');
        } else {
            input.classList.remove('error');
        }
    }

    function validateYear(input) {
        let value = parseInt(input.value, 10);
        let currentYear = new Date().getFullYear() % 100; // Solo los últimos dos dígitos

        if (isNaN(value) || value < currentYear || value > (currentYear + 10)) {
            input.classList.add('error');
        } else {
            input.classList.remove('error');
        }
    }

    function validateCardNumber(input) {
        // Eliminar todos los caracteres no numéricos
        input.value = input.value.replace(/\D/g, '');

        // Validar longitud de 16 dígitos
        if (input.value.length > 16) {
            input.value = input.value.slice(0, 16);
        }

        // Verificación de campo vacío y longitud exacta
        if (input.value.length === 16 || input.value.length === 0) {
            input.classList.remove('error');
        } else {
            input.classList.add('error');
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        const monthInput = document.getElementById("month");
        const yearInput = document.getElementById("year");
        const cardInput = document.getElementById("card");
        cardInput.addEventListener('input', () => validateCardNumber(cardInput));
        monthInput.addEventListener('input', () => validateMonth(monthInput));
        yearInput.addEventListener('input', () => validateYear(yearInput));
    });
</script>
<?php incluirTemplate('footer'); ?>