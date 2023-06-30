<?php
    // session_unset();
    // session_destroy();
    // session_start();
    // if(!isset($_SESSION['usuario'])){
    //     $_SESSION['usuario'] = '';
    //     $_SESSION['correo'] = '';
    //     $_SESSION['clave'] = '';

    //     header('Location: index.php');
    // }
    
    // variables de session
    $usuario = $_SESSION['usuario'];
    $clave = $_SESSION['clave'];

    // inicial del nombre en la burbuja
    $inicial = strtoupper(substr($usuario, 0, 1));
    // almacenar la variable iniciar en una variable de session
    $_SESSION['inicial'] = $inicial;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
    <header id="header">
        <nav id="navMenu">
            <a href="index.php"><h2>Prueba</h2></a>
        </nav>
        <p class="initial_name" id="initial_name">
            <?php echo $_SESSION['inicial']; ?>
        </p>
    </header>

    
    <!-- script -->
    <script src="js/colorRandom.js"></script>
</body>
</html>