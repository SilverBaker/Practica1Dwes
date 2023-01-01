<?php

    function listarDepartamentos (){
        $consult = BD::$bd->query("select * from departamentos");
        echo "<table><tr><td>CodDept</td><td>Nombre</td><td>Jefe</td><td>Presupuesto</td><td>Ciudad</td></tr>";

        foreach ($consult as $row){
            echo "<tr><td>$row[CodDept]</td><td>$row[Nombre]</td><td>$row[Jefe]</td><td>$row[Presupuesto]</td><td>$row[Ciudad]</td></tr>";
        }
        echo "</table>";
    }