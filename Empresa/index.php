<!DOCTYPE html>
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once __DIR__ . '/lib/BD/BD.php';
    $base = new BD("mysql:dbname=unidad6;host=127.0.0.1", "root", "");
}
if (isset($_SESSION["rol"])) {
    if ($_SESSION["rol"] == 1) {
        header("location:lib/pages/admin.php");
    } 
    if ($_SESSION["rol"] == 0){
        header("location:lib/pages/client.php");

    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body class="bg-black">
        <div class="container text-white mt-5">
            <div class="row h-100 mt-5">
            <form method ="POST" action ="" class="col-3 mx-auto mt-5 bg-dark my-auto">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Usuario</label>
                    <input class="form-control" id ="usuario" name="usuario" type="text" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input class="form-control" id="clave" name="clave" type="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                <p class="text-danger pt-3 text-center">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (!$base->probarConexion()) {
                        echo "No se encuentra la base de datos";
                    }
                    if ($base->probarConexion()) {
                        $base->login();
                    }
                }
                ?>
                </p>
            </form>
            

            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
