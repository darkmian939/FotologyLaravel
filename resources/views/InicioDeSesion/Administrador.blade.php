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
    <form id="Administrador" action="{{ route('administrador.login') }}" method="POST">
        @csrf
        <div class="header">
            <a class="selected" data-user-type="Administrador">ADMINISTRADOR</a><br><br>
        </div>
        <hr>
        @if ($errors->any())
            <div class="alert alert-danger">
                <p class="error">{{ $errors->first() }}</p>
            </div>
        @endif
<div class="fila">
    <label for="Email">Usuario</label>
    <input type="email" id="Email" name="Email" required>
</div>
<div class="fila">
    <label for="Clave">Contraseña</label>
    <input type="password" id="Clave" name="Clave" required>
</div>
        <div class="fila"><br><br>
            <input type="checkbox" class="check" id="mantener-sesion" name="mantener-sesion">
            <label for="mantener-sesion">Mantener Sesión</label>
        </div>
        <input type="submit" value="Iniciar Sesión" class="btn">
    </form>
    <p>¿Quieres iniciar sesión como <a href="{{ route('InicioDeSesion.usuario') }}">Usuario</a> o <a href="{{ route('PaginaFotografos.index') }}">Fotógrafo</a>?</p>
    <a href="{{ route('InicioDeSesion.recuperar') }}" class="olvido">Olvidó la Contraseña</a>
</div>
<script src="{{ asset('script.js') }}"></script>
</body>
</html>