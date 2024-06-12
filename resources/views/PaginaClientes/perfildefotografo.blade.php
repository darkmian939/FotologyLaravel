<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fotógrafos</title>
    <link rel="stylesheet" href="css/Cliente css/FotografosPerfil.css" />
    <link rel="icon" href="Recursos/LOGOA.png" />
    <script src="https://kit.fontawesome.com/9bf48cfb4e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <script src="js/dropdown.js"></script>

    <header class="header">
        <div class="logo">
            <img src="Recursos/LOGOA.png" alt="Logo" />
        </div>
        <nav>
            <ul class="linksnav">
                <li><a href="<?php echo route('PaginaClientes.pagina'); ?>">Inicio</a></li>
                <li><a href="<?php echo route('PaginaClientes.fotografos'); ?>">Fotógrafos</a></li>
                <li><a href="<?php echo route('PaginaClientes.contacto'); ?>">Contacto</a></li>
                <li><a href="<?php echo route('PaginaClientes.perfilusuario'); ?>">Perfil</a></li>
            </ul>
        </nav>
        <a class="btn" href="<?php echo route('InicioDeSesion.Usuario'); ?>"><button>Cerrar Sesión</button></a>
    </header>
    <br>
    <div class="header2" style="position: relative; z-index: 1;">
        
        <section class="textos-header">
            <?php
            // Obtener el nombre del fotógrafo seleccionado de la URL
            $nombreFotografo = $_GET['nombre'] ?? '';

            // Mostrar el nombre del fotógrafo
            echo "<h1>$nombreFotografo</h1>";
            ?>
            <h2> Encuentra tu fotografo de preferencia </h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden; margin-bottom: -20px; z-index: 1;">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%; filter: blur(1px);">
                <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg>
        </div>
    </div>

    <center>
<div class="fdestacados" style="margin-top: 15px; position: relative; z-index: 2;">
<h1 style="margin-top: -70px; color: #ffc403; font-weight: bold; font-size: 90px;" >¡Contactame!</h1>
    <div class="social-icons">
     <a href="#"><img src="Recursos/facebook2.png" alt="Facebook" style="width: 50px; height: 50px;"></a>
     <a href="#"><img src="Recursos/instagram.png" alt="Instagram" style="width: 50px; height: 50px;"></a>
     <a href="#"><img src="Recursos/gmail.png" alt="Gmail" style="width: 50px; height: 50px;"></a>
     <a href="#"><img src="Recursos/gorjeo.png" alt="Twitter" style="width: 45px; height: 45px;"></a>
     <br>
     <hr class="linea"></hr>
    </div>
</div>
<div><h1 style="margin-top: 10px; margin-bottom: 29px; color: #ffc403; font-weight: bold;">Categorias</h1></div>
<div class="photographers-grid" id="photographersGrid">
        <div class="photographer">
        <br>
            <img src="Recursos/evento.jpg" class="photographer-img">
            <button class="boton-categoria" onclick="abrirCategoria()">Eventos</button>
        </div>
        
        <div class="photographer">
        <br>
            <img src="Recursos/moda.jpg" class="photographer-img" >
            <button class="boton-categoria" onclick="abrirCategoria()">Moda</button>
        </div>
        <div class="photographer">
            <br>
            <img src="Recursos/retrato.jpg" class="photographer-img">
            <button class="boton-categoria" onclick="abrirCategoria()">Retratos</button>
        </div>
        <div class="photographer">
        <br>
            <img src="Recursos/comidas.jpg" class="photographer-img">
            <button class="boton-categoria" onclick="abrirCategoria()">Alimentos</button>
            <br>
        </div>
     
    </div>

    <br>
    <hr class="linea"></hr>
    <div><h1 style="margin-top: 30px; color: #ffc403; font-weight: bold;">Comentarios</h1></div>
    </center>
    <div class="contenedor">
    <img class="imagen" src="Recursos/foto1.jpg" alt="Paisaje" />
    <div class="texto">
        <div class="nombre">
            <h1>Camila S.</h1>
            <span class="estrellas">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
        </div>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea officiis
            quis optio voluptatem deleniti, labore cumque, debitis neque, dolor
            autem consequatur beatae. Quam excepturi rem, eaque quasi ad esse
            harum?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
       
        </p>
        <div class="top-1">Hace un momento</div>
    </div>
</div>
<br>
<br>
<div class="contenedor">
    <img class="imagen" src="Recursos/foto.jpg" alt="Paisaje" />
    <div class="texto">
        <h1 class="nombre">Alexis M. <span class="estrellas">&#9733;&#9733;&#9733;&#9733;&#9733;</span></h1>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea officiis
            quis optio voluptatem deleniti, labore cumque, debitis neque, dolor
            autem consequatur beatae. Quam excepturi rem, eaque quasi ad esse
            harum?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
        
        </p>
        <div class="top-1">Top 2</div>
    </div>
</div>
<br>
<br>
<div class="contenedor">
    <img class="imagen" src="Recursos/foto.jpg" alt="Paisaje" />
    <div class="texto">
        <h1 class="nombre">Made R. <span class="estrellas">&#9733;&#9733;&#9733;</span></h1>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea officiis
            quis optio voluptatem deleniti, labore cumque, debitis neque, dolor
            autem consequatur beatae. Quam excepturi rem, eaque quasi ad esse
            harum?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
      
        </p>
        <div class="top-1">Top 3</div>
    </div>
</div>
</center>
</body>
</html>