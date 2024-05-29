<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión como Administrador</title>
    <link rel="stylesheet" href="{{ asset('css/Home y Inicio css/styles.css') }}">
</head>
<body>
<div class="contenedor-form">
    <form id="Administrador" action="{{ route('PaginaAdministrador.bienvenida') }}" method="POST">
        @csrf
        <div class="header">
            <a class="selected" data-user-type="Administrador">ADMINISTRADOR</a><br><br>
        </div>
        <hr>
        @if (isset($error))
            <p class="error">{{ $error }}</p>
        @endif
        <div class="fila">
            <label for="usuario">Usuario de Administrador</label>
            <input type="text" id="usuario" name="usuario">
        </div>
        <div class="fila">
            <label for="contraseña">Contraseña</label>
            <input type="password" id="contraseña" name="contraseña">
        </div>
        <div class="fila"><br><br>
            <input type="checkbox" class="check" id="mantener-sesion" name="mantener-sesion">
            <label for="mantener-sesion">Mantener Sesión</label>
        </div>
        <input type="submit" value="Iniciar Sesión" class="btn">
    </form>
    <p>¿Quieres iniciar sesión como <a href="{{ route('InicioDeSesion.usuario') }}">Usuario</a> o <a href="{{ route('InicioDeSesion.fotografo') }}">Fotografo</a>?</p>
    <a href="{{ route('InicioDeSesion.recuperar') }}" class="olvido">Olvidó la Contraseña</a>
</div>
<script src="{{ asset('script.js') }}"></script>
</body>
</html>
