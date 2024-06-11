<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión como Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/Home y Inicio css/styles.css') }}">
</head>
<body>
<div class="contenedor-form">
    <div id="usuarioContainer">
        <form id="Usuario" action="{{ route('usuario.login') }}" method="POST">
            @csrf
            <div class="header">
                <a class="selected" data-user-type="Usuario">USUARIO</a><br><br>
            </div>
            <hr>
            @if (session('error'))
                <p class="error">
                    {{ session('error') }}
                </p>
            @endif
            <div class="fila">
                <label for="Email">Usuario</label>
                <input type="email" id="Email" name="Email" required>
            </div>
            <div class="fila">
                <label for="Clave">Contraseña</label>
                <input type="password" id="Clave" name="Clave" required>
            </div>
            <input type="submit" value="Iniciar Sesión" class="btn">
        </form>
    </div>
    <p>¿No tienes cuenta? <a href="{{ route('InicioDeSesion.registrousuario') }}">Regístrate aquí</a></p>
    <p>¿Quieres iniciar sesión como <a href="{{ route('InicioDeSesion.fotografo') }}">Fotógrafo</a> o <a href="{{ route('InicioDeSesion.administrador') }}">Administrador</a>?</p>
    <a href="{{ route('InicioDeSesion.recuperar') }}" class="olvido">Olvidó la Contraseña</a>
</div>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>


