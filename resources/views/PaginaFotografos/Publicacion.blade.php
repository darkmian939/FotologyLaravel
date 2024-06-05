<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicar</title>
    <style>
    /* Estilos del formulario de publicación */
    .publicacion-form {
        max-width: 800px;
        margin: 90px auto 0; /* Aquí ajustas el margin-top a 20px */
        top: 25;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .publicacion-form label {
        display: block;
        margin-bottom: 10px;
    }

    .publicacion-form input[type="text"],
    .publicacion-form textarea {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        margin-bottom: 10px;
    }

    .publicacion-form input[type="file"] {
        margin-bottom: 10px;
    }

    .publicacion-form button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 10px; /* Margen superior entre el botón y los otros elementos del formulario */
    display: inline-block; /* Asegura que el botón ocupe solo el espacio necesario y no el ancho completo del contenedor */
}

    .publicacion-form button:hover {
        background-color: #0056b3;
    }
</style>
</head>

<body>
    <div class="publicacion-form">
        <h2>Crear Publicación</h2>
        <!-- Formulario de publicación -->
        <form action="<?php echo route('PaginaFotografos.Publicacion'); ?>">
           
            <label for="image">Seleccionar imagen:</label><br>
            <input type="file" id="image" name="image"><br>
            <label for="description">Descripción:</label><br>
            <textarea id="description" name="description" rows="4" cols="50"></textarea><br>
            <button type="submit">Publicar</button>
        </form>
    </div>
</body>
</html>