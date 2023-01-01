<!DOCTYPE html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once __DIR__ . '/../BD/BD.php';
    include_once '../model/EmpleadoModel.php';
    $bd = new BD("mysql:dbname=unidad6;host=127.0.0.1", "root", "");
    $bd->probarConexion();
    $base = new BD("mysql:dbname=unidad6;host=127.0.0.1", "root", "");
    $modify = modify();
}
?>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eliminar</title>
    </head>
    <body>
        <form action="" method="POST">
            <label>Codigo del empleado a modificar</label>
            <input type="text" name="input" required>
            <input type="text" name="Nombre" required>
            <input type="text" name="Apellido1" required>
            <input type="text" name="Apellido2" required>
            <input type="text" name="Departamento" required>



            <input type="submit" value="Modificar">
            <p><?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if ($modify==0) {
                        echo "Empleado no encontrado";
                    }
                    if ($modify==1) {
                        echo "Departamento inexistente";
                    }
                    if ($modify==2) {
                        header("location: admin.php");
                    }
                }
                ?></p>
        </form>
    </body>
</html>