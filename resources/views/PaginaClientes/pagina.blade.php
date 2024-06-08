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
<div class="header2" style="position: relative; z-index: 1;">
<section class="textos-header">
            <h1>Bienvenidos</h1>
            <h2>Aqui empieza nuestra aventura</h2>
        </section>
    <div class="wave" style="height: 150px; overflow: hidden; margin-bottom: -20px; z-index: 1;">
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%; filter: blur(1px);">
    <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #dfdcdc;"></path>
</svg>
    </div>
</div>

<div class="fdestacados" style="margin-top: 15px; position: relative; z-index: 2;">
    <h1 style="margin-top: -70px;">Fotógrafos destacados</h1>
</div>
<hr class="linea"></hr>


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
