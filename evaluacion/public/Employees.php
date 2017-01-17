<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Empleados</title>
    </head>
    <body>
<?php
if(isset($empleados)){
    if(count($empleados) > 0){
?>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Salario</th>
                <th>Posicion</th>
                <th></th>
            </tr>
<?php
            foreach($empleados as $empleado){
?>
            <tr>
                <td><?php $empleado->name; ?></td>
                <td><?php $empleado->name; ?></td>
                <td><?php $empleado->name; ?></td>
                <td><?php $empleado->name; ?></td>
                <td><a href="<?=$router->pathFor('employee-detail', ['id' => $empleado->id])?>"</td>
            </tr>
<?php
            }
?>
        </table>
    </body>
<?php
    }else{
        echo "No se han encontrado empleados";
    }
}else{
    echo "No hay información para mostrar";
}
?>
</html>