<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Fotografo/StyloRegistroUsuario.css">

    <title>Registrarse</title>
</head>
<body>
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido a Fotology</h2>
                <p>Si ya tienes una cuenta, por favor inicia sesión aquí</p>
                <button><a href="{{ route('InicioDeSesion.usuario') }}" class="sign-up-btn">Iniciar Sesión</a></button>
            </div>
        </div>
        <form class="formulario" method="POST" action="{{ route('registro.usuario') }}" enctype="multipart/form-data">
            @csrf
            <h2 class="create-account">Crear una cuenta</h2>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-facebook-circle'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-gmail'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-microsoft'></i>
                </div>
            </div>
            <p class="cuenta-gratis">Crear una cuenta gratis</p>
            <input type="text" name="nameUser" placeholder="Nombre completo" required>
            <input type="text" name="username" placeholder="Nombre de usuario" required>
            <input type="tel" name="phone" placeholder="Teléfono" required>
            <input type="text" name="document" placeholder="Documento de identidad">
            <input type="date" name="birthday" placeholder="Fecha de nacimiento">
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <h5>Foto de perfil</h5>
            <input type="file" name="image" accept="image/*" required>
            <input type="submit" value="Registrarse" name="registrarse">
            <br>
            @if (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif
        </form>
        <script src="{{ asset('java.js') }}"></script>
    </div>
</body>
</html>

