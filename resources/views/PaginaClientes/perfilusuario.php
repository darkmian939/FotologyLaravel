<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Cliente</title>
    <link rel="stylesheet" href="css/Cliente css/perfilusuario.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="Recursos/LOGOA.png" alt="Logo">
        </div>
        <nav>
            <ul class="linksnav">
                <li><a href="<?php echo route('PaginaClientes.pagina'); ?>">Inicio</a></li>
                <li><a href="<?php echo route('PaginaClientes.fotografos'); ?>">Fotografos</a></li>
                <li><a href="<?php echo route('PaginaClientes.categorias'); ?>">Categorías</a></li>
                <li><a href="<?php echo route('PaginaClientes.contacto'); ?>">Contacto</a></li>
                <li><a href="<?php echo route('PaginaClientes.perfilusuario'); ?>">Perfil</a></li>
            </ul>
        </nav>
        <a class="btn" href="<?php echo route('InicioDeSesion.Usuario'); ?>"><button>Cerrar Sesion</button></a>
    </header>
    <main>
    <div class="card">
        <form action="editarperfilUsuario.php" method="POST" class="profile-form">
            <section class="profile">
                <div class="profile-image">
                    <img src="Recursos/LOGOA.png" alt="Foto de perfil" />
                </div>
                <div class="profile-info">
                    <h2 id="profile-name">@@@@</h2><br>
                    <p>Nombre: <span id="profile-email"></span></p><br>
                    <p>Correo Electrónico: <span id="profile-email"></span></p><br>
                    <p>Telefono de contacto: <span id="contacto"></span></p><br>
                    <p>Fecha de nacimiento: <span id="contacto"></span></p><br>
                    <button type="submit" class="edit-button">Editar Perfil</button>
                </div>
            </section>
        </form>
    </div>
</main>
</body>
</html>
