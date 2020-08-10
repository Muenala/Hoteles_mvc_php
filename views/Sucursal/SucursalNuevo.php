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
    <form id="nuevo" name="nuevo" method="POST" action="index.php?c=Sucursal&a=guardar" autocomplete="OFF">
        Nombre: <input type="text" name="NOMBRE_SUC" id=""> <br>
        Dirección: <input type="text" name="DIRECCION_SUC" id=""><br>
        Teléfono: <input type="text" name="TELEFONO_SUC" id=""><br>
        Latitud: <input type="text" name="UBICACIONLAT_SUC" id=""><br>
        Longitud: <input type="text" name="UBICACIONLON_SUC" id=""><br>
        imagen: <input type="text" name="IMAGEN_SUC" id=""><br>
        <button id+"guardar" name="guardar" type="submit">Guardar</button>
    </form>
</body>
</html>

