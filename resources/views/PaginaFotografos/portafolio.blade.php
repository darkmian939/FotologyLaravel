<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PagPrincipal</title>
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
    <div class="categorias">
        <h1>Mi Portafolio</h1>
        
        <button class="button" id="addCategoryBtn">Agregar Categoría</button>
  <p >
  <div class="select-container">
    <label class="select-text" for="category">Selecciona una categoría:</label>
    <select class="opcion" id="category">
        <option disabled selected>- SELECCIONA -</option>
        <option value="PAISAJES" data-img="https://www.dzoom.org.es/wp-content/uploads/2020/01/falsos-mitos-fotografia-equipo-camara-tripode-estabilidad-734x489.jpg">Paisajes</option>
        <option value="RETRATOS" data-img="https://www.blogdelfotografo.com/wp-content/uploads/2020/05/retrato-nin%CC%83a.webp">Retratos</option>
        <option value="MODA" data-img="https://www.blogdelfotografo.com/wp-content/uploads/2023/09/fotografia-moda-portada.webp">Moda</option>
        <option value="ALIMENTOS" data-img="https://web-images.pixpa.com/wTHX476f8606_30IWBHcHrjqeEi_qAUj407FNTjQGQM/rs:fit:1200:0/q:80/aHR0cHM6Ly9waXhwYWNvbS1pbWcucGl4cGEuY29tL2NvbS9hcnRpY2xlcy8xNTY0NzMxNjk4LTgxNTgxMC1mb29kcGhvdG9ncmFwaHktN2pwZy5qcGc=">Alimentos</option>
        <option value="VIAJES" data-img="https://i.pinimg.com/originals/14/f6/c3/14f6c3cfb801151a64ede2147020a3e1.jpg">Viajes</option>
        <option value="EVENTOS" data-img="">Eventos</option>
    </select>
    <button type="button" class="button2"  style="background-color: green; border: none; padding: 7px;" onclick="crearCategoria()">
</div>
</p>
            
       
        <p id="errorMsg"></p>
    </div>

    <div class="container-card" id="categoriesList">
        <!-- Las categorías agregadas se mostrarán aquí -->
    </div>
    </center>

    <script>
    document.getElementById('addCategoryBtn').addEventListener('click', function () {
        document.getElementById('categoryForm').style.display = 'block';
    });

    function crearCategoria() {
        var categorySelect = document.getElementById('category');
        var category = categorySelect.value;
        var imgUrl = categorySelect.options[categorySelect.selectedIndex].getAttribute('data-img');

        // Verificar si la categoría ya ha sido creada
        var existingCategories = Array.from(document.querySelectorAll('.card p')).map(p => p.textContent);
        if (existingCategories.includes(category)) {
            alert('La categoría ya ha sido creada.');
            return;
        } else {
            document.getElementById('errorMsg').style.display = 'none';
        }

        // Crear la tarjeta de la categoría
        var cardDiv = document.createElement('div');
        cardDiv.classList.add('card');

        var figure = document.createElement('figure');
        var img = document.createElement('img');
        img.src = imgUrl; // URL de la imagen correspondiente a la categoría
        figure.appendChild(img);

        var contenidoCardDiv = document.createElement('div');
        contenidoCardDiv.classList.add('contenido-card');

        var categoryName = document.createElement('p');
        categoryName.textContent = category;
        contenidoCardDiv.appendChild(categoryName);

        var aTag = document.createElement('a');
aTag.classList.add('smas');
aTag.href = "<?php echo route('PaginaFotografos.Categoria'); ?>"; // URL base de la página de Categoría
var button = document.createElement('button');
button.textContent = 'Abrir categoría';

// Agregar un evento de clic al botón
button.addEventListener('click', function() {
    var category = categoryName.textContent; // Obtener el nombre de la categoría
    // Modificar la URL con el nombre de la categoría como parámetro de consulta
    aTag.href = "<?php echo route('PaginaFotografos.Categoria'); ?>?category=" + encodeURIComponent(category);
    // Redirigir al usuario a la página de Categoría con el nombre de la categoría como parámetro
    window.location.href = aTag.href;
});

aTag.appendChild(button);

        contenidoCardDiv.appendChild(aTag);

        var deleteBtn = document.createElement('button'); // Botón para eliminar la categoría
        deleteBtn.classList.add('smas');
        deleteBtn.textContent = 'Eliminar';
        deleteBtn.classList.add('button'); // Añadir la misma clase 'button'
        deleteBtn.classList.add('smas'); // Añadir la misma clase 'smas'
        deleteBtn.onclick = function () {
            // Mostrar alerta de confirmación
            var confirmDelete = confirm("¿Estás seguro que deseas eliminar la categoría?");
            // Si se confirma la eliminación
            if (confirmDelete) {
                cardDiv.remove();
            }
        };
        contenidoCardDiv.appendChild(deleteBtn);

        cardDiv.appendChild(figure);
        cardDiv.appendChild(contenidoCardDiv);

        // Agregar la nueva tarjeta al contenedor de tarjetas
        document.getElementById('categoriesList').appendChild(cardDiv);
    }
</script>
<style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.select-container {
    display: flex;
    align-items: center;
    max-width: 700px; /* Ancho máximo del contenedor */
    background-color: #f2f2f2; /* Color de fondo del contenedor */
    padding: 10px; /* Espaciado interno del contenedor */
    border-radius: 8px; /* Bordes redondeados del contenedor */
    margin: 0 auto; /* Centrar horizontalmente */
}
.select-container label {
    margin-right: 10px; /* Espacio entre la etiqueta y el select */
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


.select-text {
    font-size: 20px;
    font-weight: bold; /* Establecer el peso de la fuente en negrita */
}

.categorias {
    margin-bottom: 20px;
}

.button {
    padding: 8px 16px;
    background-color: #FABC37;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

    .button:hover {
        background-color: #0056b3;
    }

    
    .button2 {
    padding: 8px 16px;
    background-color: #4CAF50; /* Color verde */
    color: white; /* Texto en blanco */
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.button2:hover {
        background-color: #0056b3;
    }

.button2::after {
    content: "\2713"; /* Código Unicode para el símbolo de verificación */
    font-size: 16px;
    margin-left: 2px; /* Espacio después del símbolo de verificación */
}

.card {
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 10px;
    width: 20px;
}

    .card img {
        width: 100%;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }

.contenido-card {
    padding: 10px;
    text-align: center;
}

#errorMsg {
    color: red;
    display: none;
}
.container-card {
    display: flex;
    flex-wrap: wrap; /* Permitir el salto de línea */
    gap: 10px; /* Espacio entre las tarjetas */
    justify-content: flex-start; /* Alinear las tarjetas a la izquierda */
}

.card {
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 10px;
    width: calc(25% - 20px); /* Ancho de cada tarjeta (25% del ancho total menos el espacio entre ellas) */
}

    .card img {
        width: 100%;
        height: auto; /* Para mantener la proporción de la imagen */
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }

.contenido-card {
    padding: 10px;
    text-align: center;
}

    .card .contenido-card {
        padding: 15px;
        text-align: center;
    }

        .card .contenido-card h3 {
            margin-bottom: 15px;
            color: #1b3039;
        }

        .card .contenido-card p {
            line-height: 1.8;
            color: #14150f;
            font-size: 14px;
            margin-bottom: 5px;
        }

#errorMsg {
    color: red;
    display: none;
}

.smas button {
    font-weight: 700;
    color: #ffffff;
    padding: 8px 25px;
    background: #ffc403;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
}

    .smas button:hover {
        background-color: #cfcfcf;
        color: #14150f;
        transform: scale(1.1);
    }


/*menu DESPLEGABLE */
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #14150f;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown-content a {
    color: black; /* Color del texto negro */
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

    .dropdown-content a:hover {
        background-color: #14150f;
    }

/* Estilos personalizados para Starability */

/* Cambiar el color de fondo de las estrellas */
.starability-growRotate {
    display: inline-block;
    white-space: nowrap;
    overflow: hidden;
    vertical-align: middle;
}

    .starability-growRotate input[type="radio"] {
        display: none;
    }

    .starability-growRotate label {
        float: right;
        padding: 0;
        cursor: pointer;
        -webkit-transition: .3s ease;
        transition: .3s ease;
    }

        .starability-growRotate label:before {
            content: '\2605';
            font-size: 25px;
            color: #000; /* Cambiar color de las estrellas a negro */
        }

    .starability-growRotate input[type="radio"]:checked ~ label:before,
    .starability-growRotate input[type="radio"]:checked ~ label {
        color: #ffcc00; /* Cambiar color de estrellas seleccionadas a amarillo */
    }


/* Estilos del formulario de categorías */
/* Estilos del formulario de categorías */
.categorias {
    text-align: center;
    margin-top: 20px;
}

.categorias h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

.categorias button {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
}

.categorias form {
    margin-top: 20px;
    display: none;
}

    .categorias form label {
        display: block;
        margin-bottom: 10px;
    }

    .categorias form select {
        width: 100%;
        padding: 6px; /* Reducimos el padding */
        font-size: 14px; /* Reducimos el tamaño de la fuente */
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 10px;
    }

    .categorias form button {
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        cursor: pointer;
    }

/* Estilos de la lista de categorías */
.container-card {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 20px;
}

    .container-card .card {
        margin: 10px;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

        .container-card .card img {
            width: 100%;
            height: auto;
            display: block;
        }

        .container-card .card .contenido-card {
            padding: 15px;
            text-align: center;
        }

            .container-card .card .contenido-card button {
                padding: 8px 16px;
                background-color: #007bff;
                color: white;
                border: none;
                cursor: pointer;
                margin: 5px;
            }

                .container-card .card .contenido-card button:hover {
                    background-color: #0056b3;
                }

                .opcion {
                    margin-right: 10px; /* Espacio a la derecha del select */
    flex-grow: 1;
    font-family: Arial, sans-serif; /* Tipo de fuente */
    font-size: 16px; /* Tamaño de fuente */
    color: #333; /* Color del texto */
    padding: 10px; /* Espaciado interno */
    border: 1px solid #ccc; /* Borde del select */
    border-radius: 5px; /* Borde redondeado */
    appearance: none; /* Eliminar el estilo predeterminado del select */
    -webkit-appearance: none; /* Para navegadores basados en WebKit */
    -moz-appearance: none; /* Para navegadores basados en Gecko (Firefox) */
    background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="12" height="6" viewBox="0 0 12 6"><path fill="%23333" d="M6 6L0 0h12z"/></svg>'); /* Icono de flecha personalizado */
    background-repeat: no-repeat; /* No repetir la imagen de fondo */
    background-position: right 2px center; /* Posición del icono de flecha */
    background-size: 10px; /* Tamaño del icono de flecha */
}

.opcion option {
    font-family: Arial, sans-serif; /* Tipo de fuente */
    font-size: 16px; /* Tamaño de fuente */
    color: #333; /* Color del texto */
    background-color: 'orange'; /* Color de fondo */
}
</style>
</body>
</html>