<php session_start()?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de articulos</title>

    
</head>
<body>
oeoeoeo
    <?php 

    require '../comunes/auxiliar.php';
    require '/comunes/auxiliar.php';
    $pdo = conectar();
    $sent = $pdo->query('SELECT * FROM articulos ORDEN BY codigo');
?>
<table>
<thead>

<th>Codigo</th>
<th>Descripcion</th>
<th>Precio</th>
</thead>

<tbody>
    <?php foreach ($sent as $fila ):?>
        <tr>
        <td><?=hh($fila['codigo'])?></td>
        <td><?=hh($fila['descripcion'])?></td>
        <td><?=hh($fila['precio'])?></td>

        </tr>
        var_dump('Hola');
        <?php endforeach ?>
</tbody>

</table>
</body>
</html>