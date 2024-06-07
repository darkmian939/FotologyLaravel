<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="css/Fotografo/styleperfil.css">
    <link rel="icon" href="{{ asset('Recursos/LOGOA.png') }}">
    <script src="https://kit.fontawesome.com/9bf48cfb4e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
    </head>
<body>
    <script src="{{ asset('js/dropdown.js') }}"></script>

    <header class="header">
        <div class="logo">
            <img src="Recursos/LOGOA.png" alt="Logo">
        </div>
        <nav>
            <ul class="linksnav">
                <!-- <li><a href="{{ route('PaginaFotografos.PaginaFotografo') }}">Inicio</a></li> -->
                <li><a href="">Portafolio</a></li>
                <li><a href="">Calificacion</a></li>
                <li><a href="<?php echo route('PaginaFotografos.contactoFotografo'); ?>">Contacto</a></li>
                <li><a href="<?php echo route('PaginaFotografos.perfilFotografo'); ?>">Perfil</a></li>          
            </ul>
        </nav>
        <a class="btn" href="<?php echo route('InicioDeSesion.Usuario'); ?>"><button>Cerrar Sesion</button></a>
    </header>
<bodya>
<div class="profile-container">
        <div class="profile-box">
            <img src="Recursos/LOGOA.png/ " alt="Foto del perfil" class="profile-photo">
            <div class="profile-info">
                <p><strong>Nombre:</strong> Camilo Rogz </p>
                <p><strong>Correo Electrónico:</strong> rogz@gmail.com</p>
                <p><strong>Teléfono de Contacto:</strong> +123456789</p>
                <p><strong>Fecha de Nacimiento:</strong> 01/01/1980</p>
            </div>
            <div class="profile-actions">
                <a href="/editar-perfil" class="edit-profile-button">Editar Perfil</a>
            </div>
        </div>
        
    </div>

</bodya>
</html>
</body>
</html>
