<?php
    include 'registro-back.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <!-- Icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <!-- Include header.php -->
    <?php include 'header.php';?>
    <main class="main">
        <form action="registro-back.php" autocomplete="off" method="POST">
            <h4 id="titulo">Registrarse</h4>
            <label for="usuario">Usuario</label>
            <input type="text" id="usuario" name="usuario">
            <label for="correo">Correo electónico</label>
            <input type="email" id="correo" name="correo">
            <label for="clave">Contraseña</label>
            <input type="password" name="clave" id="clave">
            <ion-icon name="eye-outline" class="icon-eye-show" id="icon-eye-show" title="Mostrar contraseña"></ion-icon>
            <label for="confir_clave">Confirmar contraseña</label>
            <input type="password" name="confir_clave" id="confir_clave">
            <ion-icon name="eye-outline" class="icon-eye-show2" id="icon-eye-show" title="Mostrar contraseña"></ion-icon>

            <input type="hidden" name="hidden">
            <!-- Submit -->
            <div class="enviar">
                <input type="submit" value="Registrarse" name="login">
            </div>
            <!-- Registro -->
            <div class="registro">
                <a href="index.php" id="linkSesion"><small>Iniciar Sesión</small></a>
            </div>
        </form>
    </main>

    <!-- script -->
    <script>
        const clave = document.getElementById('clave');
        const confir_clave = document.getElementById('confir_clave');
        const icono = document.querySelector('.icon-eye-show');
        const icono2 = document.querySelector('.icon-eye-show2');

        icono.addEventListener('click', () => {
            if(clave.type === 'password' && confir_clave.type === 'password'){
                clave.type = 'text';
                // confir_clave.type = 'text';
                // icono.classList.remove('eye-outline');
                // icono.classList.add('eye-off-outline');
            }else{
                clave.type = 'password';
                // confir_clave.type = 'password';
                // icono.classList.add('eye-outline');
                // icono.classList.remove('eye-off-outline');
            }});

        icono2.addEventListener('click', () => {
            if(confir_clave.type === 'password'){
                confir_clave.type = 'text';
                // icono.classList.remove('eye-outline');
                // icono.classList.add('eye-off-outline');
            }else{
                confir_clave.type = 'password';
                // icono.classList.add('eye-outline');
                // icono.classList.remove('eye-off-outline');
            }
        });
    </script>
</body>
</html>