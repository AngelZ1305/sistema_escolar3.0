<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sistema Escolar de la Unison</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <script src='main.js'></script>
</head>
<body>
    <div class="border">
    <form action="validar.php" method="POST">
    <h1 >Sistema Escolar</h1>
        <label for="user" class="login"> Matricula:</label>
        <input type="number" name="user" required>
        <label for="pswd" class="login"> Contraseña:</label>
        <input type="password" name="pswd" id="" required>
        <button type="submit" class="login">Entrar</button>
    </form>
</div>
    <?php
    //validamos el warning
    if (!empty($_GET["error"]) && $_GET["error"] == 100) {
        
        echo "Se ha detectado un acceso indebido";
    }

    
    
    
    ?>
</body>
</html>