<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PagPrincipal</title>
    <link rel="stylesheet" href="css/Fotografo/styleportafolio.css" />
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
    <br>
<div class="header2" style="position: relative; z-index: 1;">
<section class="textos-header">
            <h1>Mi portafolio</h1>
            <h2>Comparte tu trabajo con los demas</h2>
        </section>
    <div class="wave" style="height: 150px; overflow: hidden; margin-bottom: -20px; z-index: 1;">
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%; filter: blur(1px);">
    <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #ffff;"></path>
</svg>
    </div>
</div>

    <center>
        
    <div class="fdestacados" style="margin-top: 15px; position: relative; z-index: 2;">
    <h1 style="margin-top: -70px;">Crea tus categorias</h1>
    <hr class="linea"></hr>
</div>
</div>
  <p >
  <div class="select-container">
    <label class="select-text" for="category">Selecciona una categoría:</label>
    <select class="opcion" id="category">
        <option disabled selected>- SELECCIONA -</option>
        <option value="PAISAJES" data-img="../public/Recursos/paisaje.jpg">Paisajes</option>
        <option value="RETRATOS" data-img="../public/Recursos/retrato.jpg">Retratos</option>
        <option value="MODA" data-img="../public/Recursos/moda.jpg">Moda</option>
        <option value="ALIMENTOS" data-img="../public/Recursos/comidas.jpg">Alimentos</option>
        <option value="VIAJES" data-img="../public/Recursos/viaje.jpg">Viajes</option>
        <option value="EVENTOS" data-img="../public/Recursos/evento.jpg">Eventos</option>
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
</body>
</html>