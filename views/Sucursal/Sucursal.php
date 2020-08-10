<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['titulo']; ?></title>
</head>
<body>
    <h2><?php echo $data['titulo']; ?></h2>
    <a href="index.php?c=Sucursal&a=nuevo">Agregar</a>
    <table border = "" width="80%">
        <thead>

            <tr>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Latitud</th>
                <th>Longitud</th>
                <th>imagen</th>
                <th colspan="2">imagen</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            foreach($data['sucursales'] as $dato){
                echo '<tr>';
                    echo '<td>'.$dato['NOMBRE_SUC'].'</td>';
                    echo '<td>'.$dato['DIRECCION_SUC'].'</td>';
                    echo '<td>'.$dato['TELEFONO_SUC'].'</td>';
                    echo '<td>'.$dato['UBICACIONLAT_SUC'].'</td>';
                    echo '<td>'.$dato['UBICACIONLON_SUC'].'</td>';
                    echo '<td>'.$dato['IMAGEN_SUC'].'</td>';
                    echo '<td> <a href="index.php?c=Sucursal&a=modificar&id='.$dato['ID_SUC'].'">Editar</a></td>';
                    echo '<td> <a href="index.php?c=Sucursal&a=eliminar&id='.$dato['ID_SUC'].'">Eliminar</a></td>';
                echo '</tr>';
            }
        ?>
        </tbody>
    </table>
</body>
</html>

