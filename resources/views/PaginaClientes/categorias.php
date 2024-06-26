<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Categorías de Fotografías</title>
    <link rel="stylesheet" href="css/Cliente css/stylecategorias.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/646ac4fad6.js"
      crossorigin="anonymous"
    ></script>
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
                <li><a href="<?php echo route('PaginaClientes.fotografos'); ?>">Fotografos</a></li>
                <li><a href="<?php echo route('PaginaClientes.categorias'); ?>">Categorías</a></li>
                <li><a href="<?php echo route('PaginaClientes.contacto'); ?>">Contacto</a></li>
            </ul>
    </nav>
    <a class="btn" href="<?php echo route('InicioDeSesion.Usuario'); ?>"><button>Cerrar Sesion</button></a>
</header>
    <h1>Categorias</h1>

    <div class="container-card">
      <div class="card">
        <figure>
          <img
            src="https://media.colombian.com.co/wp-content/uploads/2018/12/04114439/ImagenDestacada-Paisajes-01.jpg"
          />
        </figure>
        <div class="contenido-card">
          <h3>Paisajes</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
            officiis quis optio voluptatem deleniti, labore cumque, debitis
            neque, dolor autem consequatur beatae.
          </p>
        </div>
      </div>
      <div class="card">
        <figure>
          <img src="https://i.blogs.es/a709d5/kevin-biskaborn/1366_2000.jpg" />
        </figure>
        <div class="contenido-card">
          <h3>Animales</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
            officiis quis optio voluptatem deleniti, labore cumque, debitis
            neque, dolor autem consequatur beatae.
          </p>
        </div>
      </div>
    </div>
    <div class="container-card">
      <div class="card">
        <figure>
          <img
            src="https://www.formacionyestudios.com/wp-content/uploads/2018/09/como-ser-modelo.jpg"
          />
        </figure>
        <div class="contenido-card">
          <h3>Personas</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
            officiis quis optio voluptatem deleniti, labore cumque, debitis
            neque, dolor autem consequatur beatae.
          </p>
        </div>
      </div>
      <div class="card">
        <figure>
          <img
            src="https://4.bp.blogspot.com/-_wiVPaJL1UQ/Vu76uPP_RnI/AAAAAAAACHY/iq58X7aV6bYC80JuBxK3OnZptTYJxNaGw/s1600/importancia-decoracion-eventos-sociales.jpg"
          />
        </figure>
        <div class="contenido-card">
          <h3>Eventos</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea
            officiis quis optio voluptatem deleniti, labore cumque, debitis
            neque, dolor autem consequatur beatae.
          </p>
        </div>
      </div>
    </div>
  </body>
</html>
