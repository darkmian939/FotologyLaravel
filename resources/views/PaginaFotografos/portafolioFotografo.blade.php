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
</body>
</html>