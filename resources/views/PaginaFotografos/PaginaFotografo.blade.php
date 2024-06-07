<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PagPrincipal</title>
    <link rel="stylesheet" href="css/Fotografo/styleinicio.css">
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
    <div class="container">
        <section class="featured-photographers">
            <h2>Fotógrafos Destacados</h2>
            <div class="photographer-grid">
                <div class="photographer">
                <b><p class="name">Camilo Rogz</p></b>
                    <p class="rating">⭐⭐⭐⭐⭐</p>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="photographer">
                    <b><p class="name">NatalyS</p></b>
                    <p class="rating">⭐⭐⭐⭐⭐</p>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="photographer">
                <b><p class="name">MarioPrrra</p></b>
                    <p class="rating">⭐⭐⭐⭐⭐</p>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="photographer">
                <b><p class="name">Nicollew</p></b>
                    <p class="rating">⭐⭐⭐⭐⭐</p>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="photographer">
                <b><p class="name">Darckmian</p></b>
                    <p class="rating">⭐⭐⭐⭐⭐</p>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="photographer">
                <b><p class="name">Ajelandra</p></b>
                    <p class="rating">⭐⭐⭐⭐⭐</p>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </section>

        <section class="categories">
            <h2><center>Categorías de Fotografía</center></h2>
            <p>En nuesrto sitio web, ofrecemos una amplia variedad de categorias de fotografia para que puedas explorar y disfrutar. Desde paisajes hasta retratos, tenemos algo para todos los amantes de la fotografia.</p>
        </section>

        <section class="faq">
            <h2><center>Preguntas Frecuentes</center></h2>
            <p>¿Como subir mis propias fotos? Inicia sesion en tu cuenta, ve a tu perfil, haz clic en "Subir foto", selecciona la imagen que deseas cargar desde tu dispositivo, agrega metadatos y categorias.</p>
        </section>
    </div>
</body>
</html>
</body>
</html>
