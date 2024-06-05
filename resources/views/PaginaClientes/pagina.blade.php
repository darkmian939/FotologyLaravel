<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/Cliente css/stylepagprincipal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<header class="header">
    <div class="logo">
        <img src="Recursos/LOGOA.png" alt="Logo" />
    </div>
    <div class="perfil-btn">
        <form id="perfilForm" method="GET"></form>
    </div>
    <nav>
        <ul class="linksnav">
            <li><a href="<?php echo route('PaginaClientes.pagina'); ?>">Inicio</a></li>
            <li><a href="<?php echo route('PaginaClientes.fotografos'); ?>">Fotografos</a></li>
            <li><a href="<?php echo route('PaginaClientes.contacto'); ?>">Contacto</a></li>
            <li><a href="<?php echo route('PaginaClientes.perfilusuario'); ?>">Perfil</a></li>
        </ul>
    </nav>
    <a class="btn" href="<?php echo route('InicioDeSesion.Usuario'); ?>"><button>Cerrar Sesion</button></a>
</header>
<br>
<div class="bienvenido">
    <h1>¡Bienvenido Camilo!</h1>
    <h2>Esto es Fotology!</h2>
</div>
<br>
<br>
<br>

<div class="fdestacados">
    <h1>Fotografos destacados</h1>
</div>
<hr class="linea">
<div class="contenedor">
    <img class="imagen" src="Recursos/foto1.jpg" alt="Paisaje" />
    <div class="texto">
    <h1 class="nombre">Camila S. <span class="estrellas">&#9733;&#9733;&#9733;&#9733;&#9733;</span></h1>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea officiis
            quis optio voluptatem deleniti, labore cumque, debitis neque, dolor
            autem consequatur beatae. Quam excepturi rem, eaque quasi ad esse
            harum?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
            officiis quis optio voluptatem deleniti, labore cumque, debitis neque,
            dolor autem consequatur beatae. Quam excepturi rem, eaque quasi ad
            esse harum?Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Ea officiis quis optio voluptatem deleniti, labore cumque, debitis
            neque, dolor autem consequatur beatae. Quam excepturi rem, eaque quasi
            ad esse harum?Lorem ipsum, dolor sit amet consectetur adipisicing
            elit. Ea officiis quis optio voluptatem deleniti, labore cumque,
            debitis neque, dolor autem consequatur beatae. Quam excepturi rem,
            eaque quasi ad esse harum?Lorem ipsum.
        </p>
        <div class="top-1">Top 1</div>
    </div>
</div>
<br>
<br>
<div class="contenedor">
    <img class="imagen" src="Recursos/foto5.jpg" alt="Paisaje" />
    <div class="texto">
        <h1 class="nombre">Alexis M. <span class="estrellas">&#9733;&#9733;&#9733;&#9733;&#9733;</span></h1>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea officiis
            quis optio voluptatem deleniti, labore cumque, debitis neque, dolor
            autem consequatur beatae. Quam excepturi rem, eaque quasi ad esse
            harum?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
            officiis quis optio voluptatem deleniti, labore cumque, debitis neque,
            dolor autem consequatur beatae. Quam excepturi rem, eaque quasi ad
            esse harum?Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Ea officiis quis optio voluptatem deleniti, labore cumque, debitis
            neque, dolor autem consequatur beatae. Quam excepturi rem, eaque quasi
            ad esse harum?Lorem ipsum, dolor sit amet consectetur adipisicing
            elit. Ea officiis quis optio voluptatem deleniti, labore cumque,
            debitis neque, dolor autem consequatur beatae. Quam excepturi rem,
            eaque quasi ad esse harum?Lorem ipsum.
        </p>
        <div class="top-1">Top 2</div>
    </div>
</div>
<br>
<br>
<div class="contenedor">
    <img class="imagen" src="Recursos/foto3.jpg" alt="Paisaje" />
    <div class="texto">
        <h1 class="nombre">Made R. <span class="estrellas">&#9733;&#9733;&#9733;&#9733;&#9733;</span></h1>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea officiis
            quis optio voluptatem deleniti, labore cumque, debitis neque, dolor
            autem consequatur beatae. Quam excepturi rem, eaque quasi ad esse
            harum?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
            officiis quis optio voluptatem deleniti, labore cumque, debitis neque,
            dolor autem consequatur beatae. Quam excepturi rem, eaque quasi ad
            esse harum?Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Ea officiis quis optio voluptatem deleniti, labore cumque, debitis
            neque, dolor autem consequatur beatae. Quam excepturi rem, eaque quasi
            ad esse harum?Lorem ipsum, dolor sit amet consectetur adipisicing
            elit. Ea officiis quis optio voluptatem deleniti, labore cumque,
            debitis neque, dolor autem consequatur beatae. Quam excepturi rem,
            eaque quasi ad esse harum?Lorem ipsum.
        </p>
        <div class="top-1">Top 3</div>
    </div>
</div>
<br>
<br>
</body>
</html>
