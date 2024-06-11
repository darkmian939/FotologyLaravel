<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Cliente</title>
    <link rel="stylesheet" href="../PaginaFotografos/stylepagfotografo.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="../Recursos/LOGOA.png" alt="Logo">
        </div>
        <nav>
            <ul class="linksnav">
                <li><a href="{{ route('PaginaClientes.pagina') }}">Inicio</a></li>
                <li><a href="{{ route('PaginaClientes.fotografos') }}">Fotografos</a></li>
                <li><a href="{{ route('PaginaClientes.categorias') }}">Categorías</a></li>
                <li><a href="{{ route('PaginaClientes.contacto') }}">Contacto</a></li>
            </ul>
        </nav>
        <a class="btn" href="{{ route('InicioDeSesion.Usuario') }}"><button>Cerrar Sesión</button></a>
    </header>
    <main>
        <section class="profile">
            @if ($cliente)
            <div class="profile-image">
                <img src="{{ $cliente->fotoPerfil }}" alt="Foto de perfil" />
            </div>
            <div class="profile-info">
                <h2 id="profile-name">{{ $cliente->nombre }}</h2><br>
                <p>Correo Electrónico: <span id="profile-email">{{ $cliente->correo }}</span></p><br>
                <p>Teléfono de contacto: <span id="contacto">{{ $cliente->telefono }}</span></p><br>
                <a class="edit-button" href="{{ route('PaginaClientes.editarperfilusuario') }}">Editar Perfil</a>
            </div>
        @else
            <p>Error: Cliente no encontrado.</p>
        @endif
        </section>
    </main>
</body>
</html>
