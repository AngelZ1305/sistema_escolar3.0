<?php
   if (empty($_POST)){
    header("Location:index.php?error=200");
} 
    //Se utiliza POSt porque van dentro de un FORMS
    //Se utiliza GET cuando va por URL

    include ("./inc/config.php");

    $expediente = $_POST["user"];

    $contrasenia = $_POST["pswd"];

    if(!empty($expediente || $contrasenia)){
            $query = "SELECT Nombre, Apellido1, Apellido2 FROM alumno WHERE Expediente = $expediente AND Contra = "  . "MD5(" . "'" . $contrasenia . "'" . ");";

    $connection = mysqli_connect($HOST, $USER, $PSWD, $NAMEBD) or die("No me conecté");

    $resultado = mysqli_query($connection, $query) or die("No me conecté");

    $fila = mysqli_fetch_assoc($resultado);

    //la flechita del php es para acceder a los metodos de las cosas (seria como el "." en JAVA)
    // . es para concatenar en PHP 
    //hay q interpolar (` `)
    
    if($resultado ->num_rows == 1 ){
        session_start();

        $_SESSION["validada"] = 1;

        $_SESSION["Nombre"] = $fila["Nombre"] . " " . $fila["Apellido1"] . " " . $fila["Apellido2"];

        header("Location:menu.php");

    }else{
        header("Location:index.php?error=100");
    
    }


    mysqli_close($connection);
    
    }else{
        header("Location:index.php?error=200");
    }