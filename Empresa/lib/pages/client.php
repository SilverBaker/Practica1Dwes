<!DOCTYPE html>
<?php
        include_once '../model/EmpleadoModel.php';
        include_once '../model/DepartamentoModel.php';
        include_once '../BD/BD.php';
        $bd=new BD("mysql:dbname=unidad6;host=127.0.0.1", "root", "");
        $bd->probarConexion();
        
        if (!isset($_SESSION["rol"])||$_SESSION["rol"]!=1){
            header("location:../../index.php");
        }
        
        
        ?>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Panel de Administrador</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    </head>
    <body>
        <div>
            <input type="button" class="btn btn-success" value="Listar empleados" id="btn-lempl">
            <input type="button" class="btn btn-success" value="Eliminar empleados" id="btn-eempl">
            <input type="button" class="btn btn-success" value="Modificar empleados" id="btn-mempl">
            <input type="button" class="btn btn-success" value="Listar departamentos" id="btn-ldep">
            <form action="" method="post">
                <input type="submit" class="btn btn-success" value="Salih" id="Salih">
            </form>

        </div>
        <div id="listaEmpleados" style="display:none">
            <?php
            listarEmpleados();
            ?>
        </div>
        <div id="listaDepartamentos" style="display:none">
            <?php
            listarDepartamentos();
            ?>
        </div>
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="../scripts/script.js"></script>
        
        
    </body>
</html>