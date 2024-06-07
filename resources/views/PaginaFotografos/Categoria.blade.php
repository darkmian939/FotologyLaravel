<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $category }} - Categoría</title> 
    <link rel="stylesheet" href="{{ asset('css/Fotografo css/Fotografos.css') }}" />
    <link rel="icon" href="{{ asset('Recursos/LOGOA.png') }}" />
    <script src="https://kit.fontawesome.com/9bf48cfb4e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
</head>
<body>
    <script src="{{ asset('js/dropdown.js') }}"></script>

    <header class="header">
        <div class="logo">
            <img src="{{ asset('Recursos/LOGOA.png') }}" alt="Logo" />
        </div>
        <nav>
            <ul class="linksnav">
                <!-- <li><a href="{{ route('PaginaFotografos.PaginaFotografo') }}">Inicio</a></li> -->
                <li><a href="<?php echo route('PaginaFotografos.portafolio'); ?>">Portafolio</a></li>
                <li><a href="">Calificacion</a></li>
                <li><a href="<?php echo route('PaginaFotografos.contactoFotografo'); ?>">Contacto</a></li>
                <li><a href="">Perfil</a></li>          
            </ul>
        </nav>
    </header>
    <center>
        <h1>{{ $category }}</h1>
    
   <!-- Otro contenido de tu página principal aquí -->
   <button class="button" id="publicarBtn">Hacer Publicación</button>
   </center>

<script>
    // Obtener el botón por su ID
    const publicarBtn = document.getElementById('publicarBtn');

    // Agregar un evento de clic al botón
    publicarBtn.addEventListener('click', function() {
        // Redirigir al usuario a la página de publicación
        window.location.href = "<?php echo route('PaginaFotografos.Publicacion'); ?>";
    });
</script>

<style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

body {
    background-color: #dfdcdc;
}

/* Header */
.header {
    background-color: #14150f;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    height: 100%;
    padding: 5px 10%;
}

    .header .logo {
        cursor: pointer;
        margin-right: auto;
    }

        .header .logo img {
            height: 60px;
            width: auto;
            transition: all 0.3s;
        }

            .header .logo img:hover {
                transform: scale(1.1);
            }

    .header .linksnav {
        list-style: none;
    }

        .header .linksnav li {
            display: inline-block;
            padding: 0 20px;
        }

            .header .linksnav li:hover {
                transform: scale(1.1);
            }

        .header .linksnav a {
            font-size: 700;
            color: #eceff1;
            text-decoration: none;
        }

        .header .linksnav li a:hover {
            color: #ffc403;
        }

    .header .btn button {
        margin-left: 20px;
        font-weight: 700;
        color: #1b3039;
        padding: 9px 25px;
        background: #eceff1;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease 0s;
    }

        .header .btn button:hover {
            background-color: #e2f1f8;
            color: #ffc403;
            transform: scale(1.1);
        }


.button {
    padding: 8px 16px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
.header h1 {
    font-size: 24px; /* Tamaño de fuente */
    color: #fff; /* Color del texto */
    margin-right: auto; /* Margen derecho automático para alinear a la izquierda */
    padding: 10px; /* Espaciado interno */
    text-align: center; /* Centrar horizontalmente */
}
    .button:hover {
        background-color: #0056b3;
    }
</style>
</body>
</html>