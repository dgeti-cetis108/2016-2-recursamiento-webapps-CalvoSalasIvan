<?php
$conexion=mysqli_connect('127.0.0.1','root','','recursamiento',3306);
$usuarios=array();

if(!$conexion){
    die('Error men, no se conecto la uea unu');
}else{
    $consulta = "select * from vw_users";
    $resultado = mysqli_query($conexion,$consulta);
    if(!$resultado)
    {
        echo'Error al ejecutar la consulta uwu';
    }
    elseif($resultado->num_rows > 0 )
    {
        while ($usuario=$resultado->fetch_assoc()) 
        {
            array_push($usuarios,$usuario);
        }
    }else{
        echo'Resulado sin registros de la consulta uwu';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>APELLIDOS</th>
                <th>EDAD</th>   
                <th>GENERO</th>
                <th>CORREO ELECTRONICO</th>
                <th>TELEFONO</th>
                <th>PAIS</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($usuarios > 0)) { ?>
            <?php foreach($usuarios as $campo ){ ?>
                
            <tr>
                <td><?php echo $campo['firstname'];?></td>
                <td><?php echo $campo['lastname'];?></td>
                <td><?php echo $campo['age'];?></td>
                <td><?php echo $campo['gender'];?></td>
                <td><?php echo $campo['email'];?></td>
                <td><?php echo $campo['phone'];?></td>
                <td><?php echo $campo['country'];?></td>
            </tr>
            <?php }} else {?>
            <tr>
                <td colspan="7">No hay registros</td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>
