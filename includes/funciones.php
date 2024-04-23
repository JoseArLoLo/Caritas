<?php
require 'app.php';
require 'config/database.php';
function incluirTemplate( string $nombre, $donar = false, $eventos = false) {
    include TEMPLATES_URL . "/$nombre.php";
}
//Para condiciones if de ser necesario
function estaAutenticado() {
    session_start();
    if($_SESSION['login']) {
        return true;
    }
    return false;
}
//Para redireccionar en caso de que no exista
function logueado() {
    session_start();
    if(!$_SESSION['login']) {
        header('Location: /');
    }
}
//Escapa / Sanitizar el HTML
function s($html): string {
    $s = htmlspecialchars($html);
    return $s;
}
function debuguear($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}
function fecha($fecha) {
    // Extraer componentes de la fecha
    $componentes_fecha = explode("-", $fecha);
    $dia = $componentes_fecha[2];
    $mes = $componentes_fecha[1];
    $anio = $componentes_fecha[0];
    
    // Array con los nombres de los meses en español
    $meses_espanol = array(
        "01" => "enero",
        "02" => "febrero",
        "03" => "marzo",
        "04" => "abril",
        "05" => "mayo",
        "06" => "junio",
        "07" => "julio",
        "08" => "agosto",
        "09" => "septiembre",
        "10" => "octubre",
        "11" => "noviembre",
        "12" => "diciembre"
    );

    // Obtener el nombre del mes en español
    $mes_nombre = $meses_espanol[$mes];
    
    // Formatear la fecha
    $fecha_formateada = $dia . " - " . $mes_nombre . " - " . $anio;
    return $fecha_formateada;
}
?>