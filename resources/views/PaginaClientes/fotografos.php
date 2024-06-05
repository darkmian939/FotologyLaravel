<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fotógrafos</title>
    <link rel="stylesheet" href="css/Cliente css/Fotografos.css" />
    <link rel="icon" href="Recursos/LOGOA.png" />
    <script src="https://kit.fontawesome.com/9bf48cfb4e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <script src="js/dropdown.js"></script>

    <header class="header">
        <div class="logo">
            <img src="Recursos/LOGOA.png" alt="Logo" />
        </div>
        <nav>
            <ul class="linksnav">
                <li><a href="<?php echo route('PaginaClientes.pagina'); ?>">Inicio</a></li>
                <li><a href="<?php echo route('PaginaClientes.fotografos'); ?>">Fotógrafos</a></li>
                <li><a href="<?php echo route('PaginaClientes.contacto'); ?>">Contacto</a></li>
                <li><a href="<?php echo route('PaginaClientes.perfilusuario'); ?>">Perfil</a></li>
            </ul>
        </nav>
        <a class="btn" href="<?php echo route('InicioDeSesion.Usuario'); ?>"><button>Cerrar Sesión</button></a>
    </header>
    <div class="title-container">
        <h1>Los Mejores Fotógrafos</h1>
    </div>
    <div class="search-bar">
        <input type="text" placeholder="Buscar fotógrafos..." id="searchInput">
    </div>
    <div class="photographers-grid" id="photographersGrid">
        <div class="photographer">
        <span class="estrellas">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
        <br>
            <img src="Recursos/foto3.jpg" alt="Fotógrafo 1">
            <h2>Made R</h2>
            <p>Eventos, Moda, Retratos, Alimentos</p>
        </div>
        
        <div class="photographer">
        <span class="estrellas">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
        <br>
            <img src="Recursos/foto5.jpg" alt="Fotógrafo 2">
            <h2>Alexis M.</h2>
            <p>Eventos, Viajes, Retratos, Animales</p>
        </div>
        <div class="photographer">
        <span class="estrellas">&#9733;&#9733;&#9733;</span>
            <br>
            <img src="Recursos/foto6.jpg" alt="Fotógrafo 3">
            <h2>Paula B.</h2>
            <p>Eventos</p>
        </div>
        <div class="photographer">
        <span class="estrellas">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
        <br>
            <img src="Recursos/foto1.jpg" alt="Fotógrafo 4">
            <h2>Camila S.</h2>
            <p>Eventos, Retratos, Alimentos</p>
        </div>
    </div>

    <script>
        document.getElementById('searchInput').addEventListener('input', function() {
            let filter = this.value.toLowerCase();
            let photographers = document.getElementsByClassName('photographer');
            
            for (let i = 0; i < photographers.length; i++) {
                let photographer = photographers[i];
                let name = photographer.getElementsByTagName('h2')[0].textContent.toLowerCase();
                let description = photographer.getElementsByTagName('p')[0].textContent.toLowerCase();
                
                if (name.includes(filter) || description.includes(filter)) {
                    photographer.style.display = "";
                } else {
                    photographer.style.display = "none";
                }
            }
        });
    </script>
</body>
</html>
