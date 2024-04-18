<?php
require 'includes/config/database.php';
$user = "admin";
$password = "caritas";
$db = conectarBD();
$query = "SELECT * FROM Usuarios WHERE user = '$user'";
$resultado = mysqli_query($db, $query);
if ($resultado->num_rows) {
    header('Location: /login');
} else {
    //$passwordHash = password_hash($password, PASSWORD_DEFAULT); //Hashear password op1 (muy buena opcion)
    $passwordHash = password_hash($password, PASSWORD_BCRYPT); //Hashear password op2 (muy buena opcion)
    //Query para crear el usuario
    $query = "INSERT INTO Usuarios (user, password) VALUES ('$user', '$passwordHash')";
    //Agregarlo a la base de datos
    echo var_dump($query);
    mysqli_query($db, $query);
    mysqli_close($db);
}
?>