<?php
require 'includes/funciones.php';
incluirTemplate('header', false, false, true);
?>
<script>
    window.onload = function() {
         setTimeout(function() {
             window.location.href = "/";
         }, 7000); 
    };
</script>
<h1 class="titulo-center-rojo">GRACIAS POR TU DONACION!</h1>
<?php
//Cerrar la conexion sqli (Opcional)
mysqli_close($db);
incluirTemplate('footer');
?>