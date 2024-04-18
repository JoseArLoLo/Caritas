<?php
require '../includes/config/database.php';
require '../includes/funciones.php';
$db = conectarBD();

$errores = [];
// Autenticar el usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = mysqli_real_escape_string($db, filter_var($_POST['user']));
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (!$user) {
        $errores[] = "El usuario es obligatorio o no es valido";
    }
    if (!$password) {
        $errores[] = "El password es obligatorio";
    }

    if (empty($errores)) {
        //Revisar si el usuario existe
        $query = "SELECT * FROM usuarios WHERE user = '$user'";
        $resultado = mysqli_query($db, $query);

        if ($resultado->num_rows) {
            // Revisar si el password es correcto
            $usuario = mysqli_fetch_assoc($resultado);

            //verificar si el password es correcto o no
            $auth = password_verify($password, $usuario['password']);

            if ($auth) {
                // El usuario esta autenticado
                session_start();

                //Llenar el arreglo de la sesion
                $_SESSION['usuario'] = $usuario['user'];
                $_SESSION['login'] = true;

                header('Location: /admin');
            } else {
                $errores[] = "El password es incorrecto";
            }
        } else {
            $errores[] = "El usuario no existe";
        }
    }
}
incluirTemplate('header');
?>
<main class="contenedor seccion">
    <section class="section section-about">
        <h1 class="titulo-center-rojo" style="margin: 1rem 0;">Iniciar Sesión</h1>

        <?php foreach ($errores as $error) : ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form method="POST" class="formulario">
            <fieldset>
                <legend>Usuario y Contraseña</legend>

                <label for="user">Usuario</label>
                <input type="text" name="user" placeholder="Tu usuario" id="user">

                <label for="password">Contraseña</label>
                <input type="password" name="password" placeholder="Tu Password" id="password">
            </fieldset>

            <input type="submit" value="Iniciar Sesión" class="boton-verde">
        </form>
    </section>
</main>
<?php
mysqli_close($db);
incluirTemplate('footer');
?>