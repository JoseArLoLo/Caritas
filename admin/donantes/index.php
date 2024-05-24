<?php
require '../../includes/funciones.php';
if (!estaAutenticado()) {
    header('Location: /login');
}
// Importar la conexion para cargar datos de tablero
$db = conectarBD();

$query = "SELECT * FROM payment";
$donadores = mysqli_query($db, $query);


incluirTemplate('header');
?>
<main class="contenedor seccion">
    <div class="tablas_administrables">
        <div class="elementos" id="donadores">
            <h2 class="subtitulo-center-rojo">Donadores</h2>
            <a href="/admin" class="boton-rojo">Volver</a>
            <div class="contenedor-tabla esp">
                <table class="tabla">
                    <thead>
                        <th>ID</th>
                        <th>Donante</th>
                        <th>Cantidad</th>
                        <th>Fecha donacion</th>
                        <th>Correo</th>
                        <th>Clave unica</th>
                    </thead>
                    <tbody>
                        <?php while ($donante = mysqli_fetch_assoc($donadores)) : ?>
                            <tr>
                                <td><?php echo $donante['id']; ?></td>
                                <td><?php echo $donante['name']; ?></td>
                                <td><?php echo $donante['total']; ?></td>
                                <td><?php echo $donante['date_created']; ?></td>
                                <td><?php echo $donante['email']; ?></td>
                                <td><?php echo $donante['order_id']; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div><!--Seccion Anuncios-->
    </div>
</main>
<?php
//Cerrar la conexion sqli (Opcional)
mysqli_close($db);
incluirTemplate('footer');
?>