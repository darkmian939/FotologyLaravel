<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="css/Aministrador/stylecotactos.css">
    <link rel="icon" href="{{ asset('Recursos/LOGOA.png') }}">
    <script src="https://kit.fontawesome.com/9bf48cfb4e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
    </head>
<body>
    <script src="{{ asset('js/dropdown.js') }}"></script>

    <header class="header">
        <div class="logo">
            <img src="Recursos/LOGOA.png" alt="Logo">
        </div>
        <nav>
            <ul class="linksnav">
                <li><a href="">Cliente</a></li>
                <li><a href="">Fotografo</a></li>        
            </ul>
        </nav>
        <a class="btn" href="<?php echo route('InicioDeSesion.Usuario'); ?>"><button>Cerrar Sesion</button></a>
    </header>
    <div class="container">
        <h1>Comentarios</h1>
        <form action="#" method="POST">
            <div>
                <label for="author">Autor:</label>
                <input type="text" id="author" name="author" required>
            </div>
            <div>
                <label for="content">Comentario:</label>
                <textarea id="content" name="content" required></textarea>
            </div>
            <button type="submit">Enviar</button>
        </form>

        <h2>Todos los Comentarios</h2>
        <ul>
            <li>
                <strong>Cliente 1:</strong> Este es un comentario de ejemplo.
                <form action="#" method="POST">
                    <textarea name="response" required>Responder a este comentario...</textarea>
                    <button type="submit">Responder</button>
                </form>
            </li>
            <li>
                <strong>Fotógrafo 1:</strong> Otro comentario de ejemplo.
                <form action="#" method="POST">
                    <textarea name="response" required>Responder a este comentario...</textarea>
                    <button type="submit">Responder</button>
                </form>
            </li>
        </ul>
    </div>
</body>
</html>