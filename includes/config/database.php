<?php

function conectarBD(): mysqli
{
    # Server, User, Pass, DataBase
    // $db = mysqli_connect( 'localhost', 'root', 'root', 'caritas' );
    $db = mysqli_connect('nyc.domcloud.co', 'worse-loss-jus', 'g1YrR-Lz9SGqd71__9', 'worse_loss_jus_db');
    if (!$db) {
        echo "Error no se pudo conectar";
        exit;
    }
    // Establecer la codificación de caracteres a utf8mb4
    if (!mysqli_set_charset($db, "utf8mb4")) {
        printf("Error cargando el conjunto de caracteres utf8mb4: %s\n", mysqli_error($db));
        exit();
    }

    return $db;
}
