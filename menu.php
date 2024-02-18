<?php
session_start();

$sesion = $_SESSION["validada"];

if(empty($_SESSION["validada"])){
    header("Location: index.php?error=300");
}

if($_SESSION["validada"] != 1){
    header("Location: index.php?error=300");
}
$nombreUsuario = $_SESSION["validada"];
$usuario = $_SESSION["Nombre"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='css/menu.css'>
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <p> <?php echo $usuario; ?></p>
    <table>
        <tr>
            <th>Materias</th>
            <th>Cursos</th>
            <th>Kardex</th>
            <th>Calificaciones</th>
            <th>Idiomas</th>
            <th>Adeudos</th>
            <th><a href="index.php">Salir</a> </th>
        </tr>
    </table>

    <p>Pongame un 100 profe :D</p>

 

    <a href="logout.php">Log out</a>
</body>
</html>
