<nav>
    <style>
        /* Estilos CSS para la barra de navegación */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #DDF2FD; /* Fondo celeste claro */
            color: #fff; /* Texto blanco */
        }

        header {
            background-color: #164863; /* Azul oscuro para el encabezado */
            padding: 10px;
            color: #fff; /* Texto blanco */
            text-align: center;
        }

        h2 {
            color: #164863; /* Azul oscuro para los títulos de sección */
        }

        p {
            color: #427D9D; /* Azul medio para el contenido */
        }
        nav {
            background-color: #427D9D; /* Azul medio para la barra de navegación */
            padding: 10px;
        }

        nav a {
            color: #fff; /* Texto blanco para los enlaces */
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
            cursor: pointer;
        }

        section {
            padding: 20px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #427D9D; /* Azul medio para el dropdown */
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: #fff;
            padding: 12px 16px;
            display: block;
            text-decoration: none;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Otros estilos para la barra de navegación si es necesario */
    </style>

    <div class="dropdown">
        <a href="#">Suscripciones <span>&#9662;</span></a>
        <div class="dropdown-content">
            <a href="suscripciones_streaming.php">Streaming</a>
            <a href="suscripciones_videojuegos.php">Videojuegos</a>
        </div>
    </div>

    <div class="dropdown">
        <a href="#">Compras <span>&#9662;</span></a>
        <div class="dropdown-content">
            <a href="compras_streaming.php">Streaming</a>
            <a href="compras_videojuegos.php">Videojuegos</a>
        </div>
    </div>

    <a href="consulta.php">Consulta Inestructurada</a>
    <a href="creatividad.php">Creatividad</a>
    <a href="perfil.php">Mi Perfil</a>
    <a href="../dashboard.php">Volver al inicio</a>
</nav>