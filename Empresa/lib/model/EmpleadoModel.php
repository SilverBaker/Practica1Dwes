<?php

function listarEmpleados() {
    $consult = BD::$bd->query("select * from empleados");
    echo "<table><tr><td>CodEmple</td><td>Nombre</td><td>Apellido1</td><td>Apellido2</td><td>CodDepartamento</td></tr>";

    foreach ($consult as $row) {
        echo "<tr><td>$row[CodEmple]</td><td>$row[Nombre]</td><td>$row[Apellido1]</td><td>$row[Apellido2]</td><td>$row[Departamento]</td></tr>";
    }
    echo "</table>";
}

function eliminar() {
    $param = [
        filter_input(INPUT_POST, "input")
    ];
    $consult = BD::$bd->prepare("select * from empleados where codemple=?");
    $consult->execute($param);
    if ($consult->rowCount() == 1) {
        $consult = BD::$bd->prepare("delete from empleados where codemple=?");
        $consult->execute($param);
        return true;
    } else {

        return false;
    }
}

function modify() {
    $valido = 0;
    $param = [
        filter_input(INPUT_POST, "Nombre"),
        filter_input(INPUT_POST, "Apellido1"),
        filter_input(INPUT_POST, "Apellido2"),
        filter_input(INPUT_POST, "Departamento"),
        filter_input(INPUT_POST, "input")
    ];
    $consult = BD::$bd->prepare("select * from empleados where codemple=?");
    $consult->execute(array($param[4]));
    if ($consult->rowCount() == 1) {
        $valido++;
        $consult = BD::$bd->prepare("select * from departamentos where coddept=?");
        $consult->execute(array($param[3]));
        if ($consult->rowCount() == 1) {
            $valido++;
            $consult = BD::$bd->prepare('UPDATE empleados set Nombre=?, Apellido1=?, Apellido2=?, Departamento=? WHERE CodEmple=?');
            $consult->execute($param);
        }
    }
    return $valido;
}

//delete from empleados where codemple=?