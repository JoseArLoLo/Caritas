<?php
require 'app.php';

function incluirTemplate( string $nombre, $donar = false, $eventos = false) {
    include TEMPLATES_URL . "/$nombre.php";
}
?>