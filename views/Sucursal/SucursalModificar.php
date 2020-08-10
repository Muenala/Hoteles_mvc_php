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
    <form id="nuevo" name="nuevo" method="POST" action="index.php?c=Sucursal&a=actualizar" autocomplete="OFF">
        <input type="hidden" name="ID_SUC" value="<?php echo $data['ID_SUC']; ?>">
        Nombre: <input type="text" name="NOMBRE_SUC" id="NOMBRE_SUC" value="<?php echo $data['sucursal']['NOMBRE_SUC']; ?>"> <br>
        Dirección: <input type="text" name="DIRECCION_SUC" id="DIRECCION_SUC" value="<?php echo $data['sucursal']['DIRECCION_SUC']; ?>"><br>
        Teléfono: <input type="text" name="TELEFONO_SUC" id="TELEFONO_SUC" value="<?php echo $data['sucursal']['TELEFONO_SUC']; ?>"><br>
        Latitud: <input type="text" name="UBICACIONLAT_SUC" id="UBICACIONLAT_SUC" value="<?php echo $data['sucursal']['UBICACIONLAT_SUC']; ?>"><br>
        Longitud: <input type="text" name="UBICACIONLON_SUC" id="UBICACIONLON_SU" value="<?php echo $data['sucursal']['UBICACIONLON_SUC']; ?>"><br>
        imagen: <input type="text" name="IMAGEN_SUC" id="IMAGEN_SUC" value="<?php echo $data['sucursal']['IMAGEN_SUC']; ?>"><br>
        <button id+"guardar" name="guardar" type="submit">Guardar</button>
    </form>
</body>
</html>
