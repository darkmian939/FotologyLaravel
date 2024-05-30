<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        .eliminar-btn {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .notification-btn {
            background-color: transparent;
            border: none;
            cursor: pointer;
            position: relative;
        }

        .notification-icon {
            color: #555;
            font-size: 24px;
        }

        .badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: orange;
            color: white;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 14px;
        }

        .notification-dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            width: 300px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-top: none;
            border-radius: 0 0 5px 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: none;
            z-index: 999;
        }

        .notification-dropdown.active {
            display: block;
        }

        .notification-dropdown-header {
            background-color: #f9f9f9;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .notification-dropdown-header h3 {
            margin: 0;
            font-size: 18px;
            color: #333;
        }

        .notification-dropdown-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .notification-dropdown-item {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .notification-dropdown-item:last-child {
            border-bottom: none;
        }

        .notification-dropdown-item:hover {
            background-color: #f2f2f2;
        }
    </style>
    <link rel="stylesheet" href="css/Administrador css/styleadministrador.css"> <!-- Ajusta la ruta según tu estructura de carpetas y configuración de contenido estático -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
    <title>Panel de Administrador</title>
</head>
<body>
    <script src="{{ asset('js/dropdown.js') }}"></script>

    <header class="header">
        <div class="logo">
            <img src="Recursos/LOGOA.png" alt="Logo" /> <!-- Ajusta la ruta según tu estructura de carpetas y configuración de contenido estático -->
        </div>
        <nav>
            <ul class="linksnav">
            <li><a href="<?php echo route('PaginaAdministrador.bienvenida'); ?>" >Inicio</a></li>
            </ul>
        </nav>
        <a class="btn" href="<?php echo route('InicioDeSesion.Administrador'); ?>">
            <button>Cerrar Sesión</button>
        </a>
    </header>

    <div class="container">
        <h1>Panel de Administrador</h1>
        <button class="filter-btn" onclick="filterData('Fotografos')">Fotografos</button>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del fotografo</th>
                    <th>Email</th>
                    <th>Contraseña</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Acción</th> <!-- Nueva columna para el botón de eliminación -->
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                        <td>{{ $fotografo->IDfotografo }}</td>
                        <td>{{ $fotografo->Nombre_fotografo }}</td>
                        <td>{{ $fotografo->Email }}</td>
                        <td>{{ $fotografo->Contraseña }}</td>
                        <td>{{ $fotografo->Direccion }}</td>
                        <td>{{ $fotografo->Telefono }}</td>
                        <td>
                            <!-- Formulario para enviar la solicitud de eliminación -->
                            <form method="post" action="{{ route('EliminarFotografo') }}"> <!-- Ajusta el nombre de la ruta según tu configuración -->
                                
                                <input type="hidden" name="eliminar_id" value="{{ $fotografo->IDfotografo }}" />
                                <button type="submit" class="eliminar-btn">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                
            </tbody>
        </table>
    </div>

</body>
</html>
