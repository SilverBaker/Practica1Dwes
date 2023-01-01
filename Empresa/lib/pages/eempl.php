<!DOCTYPE html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once __DIR__ . '/../BD/BD.php';
    include_once '../model/EmpleadoModel.php';
    $bd=new BD("mysql:dbname=unidad6;host=127.0.0.1", "root", "");
    $bd->probarConexion();
    $base = new BD("mysql:dbname=unidad6;host=127.0.0.1", "root", "");
    $borrar = eliminar();
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
            <label>Codigo del empleado a borrar</label>
            <input type="text" name="input">
            <input type="submit" value="Borrar">
            <p><?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (!$borrar) {
                        echo "Empleado no encontrado";
                    }else{
                        header("location: admin.php");
                    }
                }
                ?></p>
        </form>
    </body>
</html>