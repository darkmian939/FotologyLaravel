<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión como Fotógrafo</title>
    <link rel="stylesheet" href="{{ asset('css/Home y Inicio css/styles.css') }}">
</head>
<body>
<div class="contenedor-form">
    <form id="Fotografo" action="{{ route('PaginaFotografos.PaginaFotografo') }}" method="POST">
        @csrf
        <div class="header">
            <a class="selected" data-user-type="Usuario">FOTOGRAFO</a><br><br>
        </div>
        <hr>
        @if (session('error'))
            <p class="error">
                {{ session('error') }}
            </p>
        @endif
        <div class="fila">
            <label for="username">Nombre de Fotógrafo</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="fila">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="fila"><br><br>
            <input type="checkbox" class="check" id="mantener-sesion" name="mantener-sesion">
            <label for="mantener-sesion">Mantener Sesión</label>
        </div>
        <input type="submit" value="Iniciar Sesión" class="btn">
    </form>
    <p>¿No tienes cuenta? <a href="{{ route('InicioDeSesion.registrofotografo') }}">Regístrate aquí</a></p>
    <p>¿Quieres iniciar sesión como <a href="{{ route('InicioDeSesion.usuario') }}">Usuario</a> o <a href="{{ route('InicioDeSesion.administrador') }}">Administrador</a>?</p>
    <a href="{{ route('InicioDeSesion.recuperar') }}" class="olvido">Olvidó la Contraseña</a>
</div>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>

