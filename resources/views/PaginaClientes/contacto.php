<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="css/Cliente css/stylecontacto.css" />
  </head>
  <body>
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

<div class="formulario">
    <div class="form-container">
        <h2>Contacto</h2>
        <p>Contactate con nosotros!</p>
        <form action="enviar.php" method="post">
        <div class="social-icons">
                <a href="#"><img src="Recursos/facebook2.png" alt="Facebook"></a>
                <a href="#"><img src="Recursos/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="Recursos/gmail.png" alt="Gmail"></a>
                <a href="#"><img src="Recursos/gorjeo.png" alt="Twitter"></a>
            </div>
            <br>
            <div class="input-container">
                <input type="text" id="nombre" name="nombre" required placeholder="Nombre"/>
                <input type="email" id="email" name="email" required placeholder="Email"/>
                <textarea id="mensaje" name="mensaje" required placeholder="Mensaje"></textarea>
            </div>
            <div class="contact-info">
                <h1>No seas tímido</h1>
                <h5>No dudes en ponerte en contacto con nosotros si tienes alguna duda o inquietud!</h5>
            </div>
            <input type="submit" value="ENVIAR" />
        </form>
    </div>
</div>


  </body>
</html>
