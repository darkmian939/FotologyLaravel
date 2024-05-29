<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Administrador css/stylebienvenida.css">
    <title>Panel de Administrador</title>
</head>
<header class="header">
    <div class="logo">
        <img src="../Recursos/LOGOA.png" alt="Logo" />
    </div>
    <a class="btn" href="{{ route('IniciarSesionAdministrador') }}">
            <button>Cerrar Sesión</button>
        </a>
</header>
<body>
    <div class="container">
        <h1>Bienvenido, Administrador</h1>
        <div class="buttons">
            <a href="<?php echo route('PaginaAdministrador.crudcliente'); ?>" class="btn">Gestión de Clientes</a>
            <a href="<?php echo route('PaginaAdministrador.pagadministrador'); ?>" class="btn">Gestión de Fotógrafos</a>
        </div>
    </div>
</body>
</html>
