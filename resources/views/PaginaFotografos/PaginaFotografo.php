<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PagPrincipal</title>
    <link rel="stylesheet" href="css/Cliente css/stylepagprincipal.css">
    <link rel="icon" href="{{ asset('Recursos/LOGOA.png') }}">
    <script src="https://kit.fontawesome.com/9bf48cfb4e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
</head>
<body>
    <script src="{{ asset('js/dropdown.js') }}"></script>

    <header class="header">
        <div class="logo">
            <img src="{{ asset('Recursos/LOGOA.png') }}" alt="Logo">
        </div>
        <nav>
            <ul class="linksnav">
                <li><a href="{{ route('Indexfotografo') }}">Mi perfil</a></li>
                <li><a href="{{ route('PaginaFotografo') }}">Publicaciones</a></li>
                <li><a href="{{ route('PaginaCategorias') }}">Categorias</a></li>
                <li><a href="{{ route('PaginaAyuda') }}">Ayuda</a></li>
                <li><a href="{{ route('PaginaContacto') }}">Contacto</a></li>
                <li class="dropdown">
                    <a href="#">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="{{ route('PerfilCliente') }}">Perfil</a>
                        <a href="{{ route('Configuraciones') }}">Configuración</a>
                        <a href="{{ route('Index') }}">Cerrar Sesión</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <div class="fdestacados">
        <h2>Mi Perfil</h2>
    </div>
    <div class="contenedor">
        <img class="imagen" src="{{ asset('Recursos/foto.jpg') }}" alt="Paisaje">
        <div class="texto">
            <h1 class="nombre">Camilo Rodriguez</h1>
            <p>
                Bio: Apasionado fotógrafo con un ojo creativo para capturar momentos únicos y emociones auténticas. Mi objetivo es contar historias a través de la lente, revelando la belleza en lo cotidiano y destacando la singularidad de cada sujeto.
                <br>
                Experiencia: Con más de 10 años de experiencia en fotografía, he trabajado en una variedad de entornos, desde retratos íntimos hasta paisajes impresionantes. Mis habilidades incluyen iluminación natural, composición innovadora y edición creativa para lograr resultados impactantes.
                <br>
                Enfoque: Me especializo en fotografía documental y retratos, buscando capturar la esencia pura de cada momento. Mi trabajo se centra en la autenticidad y la conexión emocional, creando imágenes que perduran en la memoria.
                <br>
                Proyectos Destacados: He colaborado con revistas de viajes para capturar la belleza de destinos exóticos, he documentado ceremonias culturales en todo el mundo y he trabajado en proyectos personales que exploran temas sociales y humanitarios.
                <br>
                Equipo: Utilizo equipos de alta calidad para garantizar resultados profesionales. Mi cámara principal es una DSLR de última generación, junto con una variedad de lentes especializados y equipo de iluminación portátil para adaptarme a cualquier escenario.
            </p>
        </div>
    </div>
    <div class="categorias">
        <h1>Mi portafolio</h1> 
    </div>
    <div class="container-card">
        <div class="card">
            <figure>
                <img src="https://media.colombian.com.co/wp-content/uploads/2018/12/04114439/ImagenDestacada-Paisajes-01.jpg" />
            </figure>
            <div class="contenido-card">
                <h3>Paisajess</h3>
                <a class="smas" href="#"><button>Abrir</button></a>
            </div>
        </div>
        <div class="card">
            <figure>
                <img src="https://i.blogs.es/a709d5/kevin-biskaborn/1366_2000.jpg" />
            </figure>
            <div class="contenido-card">
                <h3>Animales</h3>
                <a class="smas" href="#"><button>Abrir</button></a>
            </div>
        </div>
        <div class="card">
            <figure>
                <img src="https://www.formacionyestudios.com/wp-content/uploads/2018/09/como-ser-modelo.jpg" />
            </figure>
            <div class="contenido-card">
                <h3>Personas</h3>
                <a class="smas" href="#"><button>Abrir</button></a>
            </div>
        </div>
        <div class="card">
            <figure>
                <img src="https://4.bp.blogspot.com/-_wiVPaJL1UQ/Vu76uPP_RnI/AAAAAAAACHY/iq58X7aV6bYC80JuBxK3OnZptTYJxNaGw/s1600/importancia-decoracion-eventos-sociales.jpg" />
            </figure>
            <div class="contenido-card">
                <h3>Eventos</h3>
                <a class="smas" href="#"><button>Abrir</button></a>
            </div>
        </div>
    </div>
</body>
</html>
