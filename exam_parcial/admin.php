<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="main2.css">
</head>
<body>
    <div id="menu">
        <ul>
            <li>Home</li>
            <li class="cerrar-sesion"><a href="includes/logout.php">Cerrar sesión</a></li><br>
            <li class="consulta"><a href="FormConsultarPerro.html">Consulta perro</a></li><br>
            <li class="Registro"><a href="FormRegistrarPerro.html">Registro perro</a></li><br>
            <li class="Registro de usuarios"><a href="Registros.html">Registro usuarios</a></li>
        </ul>
    </div>

    <section>
        <h1>Bienvenido veterinario  </h1>
    </section>
    
</body>
</html>
<?php

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: login.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: login.php');
        }
    }


?>
