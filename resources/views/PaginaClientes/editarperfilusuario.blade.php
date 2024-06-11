<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="css/Fotografo/styleeditarperfil.css">
    <link rel="icon" href="{{ asset('Recursos/LOGOA.png') }}">
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="{{ asset('Recursos/LOGOA.png') }}" alt="Logo">
        </div>
        <nav>
            <ul class="linksnav">
                <li><a href="{{ route('PaginaClientes.pagina') }}">Inicio</a></li>
                <li><a href="{{ route('PaginaClientes.fotografos') }}">Fotografos</a></li>
                <li><a href="{{ route('PaginaClientes.contacto') }}">Contacto</a></li>
                <li><a href="{{ route('PaginaClientes.perfilusuario') }}">Perfil</a></li>
            </ul>
        </nav>
        <a class="btn" href="{{ route('InicioDeSesion.Usuario') }}"><button>Cerrar Sesion</button></a>
    </header>
    <div class="profile-container">
        <div class="edit-profile-box">
            <h2>Editar Perfil</h2>
            <form action="{{ route('PaginaClientes.guardarPerfil') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="profile-photo-container">
                        <label for="photo" class="photo-label">
                            @if ($cliente)
                                <img src="{{ asset('storage/' . $cliente->image) }}" alt="Foto del perfil" class="profile-photo" id="profile-photo">
                            @else
                                <p>Error: Cliente no encontrado.</p>
                            @endif
                            <div class="overlay">Cambiar foto</div>
                        </label>
                        <input type="file" id="photo" name="photo" style="display: none;">
                    </div>
                </div>
                @if ($cliente)
                    <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input type="text" id="name" name="nameUser" value="{{ $cliente->nameUser }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" value="{{ $cliente->email }}" required>
                    </div>
                @endif
                <div class="form-group">
                    <label for="phone">Teléfono de Contacto:</label>
                    <input type="text" id="phone" name="phone" value="{{ $cliente->phone }}" required>
                </div>
                <div class="form-group">
                    <label for="birthdate">Fecha de Nacimiento:</label>
                    <input type="date" id="birthdate" name="birthday" value="{{ $cliente->birthday }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Descripción:</label>
                    <textarea id="description" name="description" rows="4" required>{{ $cliente->description }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.getElementById('photo').addEventListener('change', function(event) {
            var file = event.target.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('profile-photo').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>
