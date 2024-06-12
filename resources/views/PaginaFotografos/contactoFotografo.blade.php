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
                <li><a href="">Inicio</a></li>
                <li><a href="">Portafolio</a></li>
                <li><a href="">Calificaciones</a></li>
                <li><a href="">Perfil</a></li>
                <li><a href="<?php echo route('PaginaFotografos.contactoFotografo'); ?>">Contacto</a></li>
            </ul>
    </nav>
    <a class="btn" href="<?php echo route('InicioDeSesion.Usuario'); ?>"><button>Cerrar Sesion</button></a>
</header><br>
<div class="header2" style="position: relative; z-index: 1;">
<section class="container2">
    <div class="bigTitle">CONTACTO</div>
    <div class="smallTitle">PONERSE EN CONTACTO</div>
</section>
    <div class="wave" style="height: 150px; overflow: hidden; margin-bottom: -20px; z-index: 1;">
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%; filter: blur(1px);">
    <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #dfdcdc;"></path>
</svg>
    </div>
</div>

<center>
<div class="fdestacados" style="margin-top: 15px; position: relative; z-index: 2;">
    <h1 style="margin-top: -70px;"> ¡Contacte con nosotros!</h1>
    <div class="social-icons">
     <a href="#"><img src="Recursos/facebook2.png" alt="Facebook"></a>
    <a href="#"><img src="Recursos/instagram.png" alt="Instagram"></a>
    <a href="#"><img src="Recursos/gmail.png" alt="Gmail"></a>
    <a href="#"><img src="Recursos/gorjeo.png" alt="Twitter"></a>
</div>
    <br>
    <hr class="linea2"></hr>
</div>

</center>
<div class="formulario">
    <div class="form-container">
        <form action="enviar.php" method="post">
        <div class="contact-info">
                <h1>No seas tímido</h1>
                <h5>No dudes en ponerte en contacto con nosotros si tienes alguna queja, duda o inquietud!</h5>
            </div>
            <br>
            <div class="input-container">
                <input type="text" id="nombre" name="nombre" required placeholder="Nombre"/>
                <input type="email" id="email" name="email" required placeholder="Email"/>
                <textarea id="mensaje" name="mensaje" required placeholder="Mensaje"></textarea>
            </div>
           
            <input type="submit" value="ENVIAR" />
        </form>
    </div>
</div>



  </body>
</html>

