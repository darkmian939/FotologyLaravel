<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Registro y index/StyloRegistroFotografo.css">
    <title>Registrarse</title>
</head>
<body>
    <div class="container-form sign-up">  
        <form class="formulario" method="POST" action="{{ route('registro.fotografo') }}" enctype="multipart/form-data">
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
            <p class="create-account">Crear una cuenta gratis</p>
            <input type="text" name="nameUser" placeholder="Nombre completo" required>
            <input type="text" name="username" placeholder="Nombre de usuario" required>
            <input type="tel" name="phone" placeholder="Teléfono" required>
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <input type="text" name="adress" placeholder="Dirección" required>
            <input type="date" name="birthday" placeholder="Fecha de nacimiento" required>
            <input type="text" name="description" placeholder="Descripcion" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>            
            <input type="file" name="foto_perfil" accept="image/*" required>
            <input type="submit" value="Registrarse" name="registrarse">   
        </form>

        <div class="welcome-back">
    <div class="message">
        <img src="Recursos/LOGOA.png" alt="Bienvenido a Fotology" class="welcome-image">
        <h2>Bienvenido a Fotology</h2>
        <p>Si ya tienes una cuenta, por favor inicia sesión aquí</p>
        <button class="custom-button">
            <a href="{{ route('InicioDeSesion.fotografo') }}" class="sign-up-btn">Iniciar Sesión</a>
        </button>
    </div>
    </div>
    <script src="java.js"></script>
</body>
</html>
