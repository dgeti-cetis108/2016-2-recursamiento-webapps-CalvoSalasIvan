<?php
$conexion=mysqli_connect('127.0.0.1','root','','recursamiento',3306);
if(!$conexion==false){
    die('Error men, no se conecto la uea');
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
            <tr>
                <td>IVAN</td>
                <td>CALVO SALAS</td>
                <td>16</td>
                <td>HOMBRE</td>
                <td>CSIIVAN2000@GMAIL.COM</td>
                <td>6871057170</td>
                <td>MEXICO</td>
            </tr>
        </tbody>
    </table>
</body>
</html>