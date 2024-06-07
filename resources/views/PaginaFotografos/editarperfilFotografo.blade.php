<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="css/Fotografo/styleeditarperfil.css">
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
    <bodya>
    <div class="profile-container">
        <div class="edit-profile-box">
            <h2>Editar Perfil</h2>
            <form action="/guardar-perfil" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="profile-photo-container">
                        <label for="photo" class="photo-label">
                            <img src="Recursos/LOGOA.png" alt="Foto del perfil" class="profile-photo" id="profile-photo">
                            <div class="overlay">Cambiar foto</div>
                        </label>
                        <input type="file" id="photo" name="photo" style="display: none;">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" value="Camilo" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" value="camilo@gmail.com" required>
                </div>
                <div class="form-group">
                    <label for="phone">Teléfono de Contacto:</label>
                    <input type="text" id="phone" name="phone" value="+123456789" required>
                </div>
                <div class="form-group">
                    <label for="birthdate">Fecha de Nacimiento:</label>
                    <input type="date" id="birthdate" name="birthdate" value="1980-01-01" required>
                </div>
                <div class="form-group">
                    <label for="description">Descripción:</label>
                    <textarea id="description" name="description" rows="4" required>Fotógrafo profesional con 10 años de experiencia en fotografía de bodas y eventos.</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="save-button">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Captura el evento de cambio del input de tipo file y muestra la imagen seleccionada
        document.getElementById('photo').addEventListener('change', function(event) {
            var file = event.target.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function() {
                    document.getElementById('profile-photo').src = reader.result;
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>