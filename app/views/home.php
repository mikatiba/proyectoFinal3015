<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de Inicio</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        
        <header class="mt-5 mb-4">
            <h1>Bienvenido a Nuestra Aplicación</h1>
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href=".">Ver Usuarios</a></li>
                    <!-- Más enlaces de navegación según sea necesario -->
                </ul>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="./index.php?url=product/index">Ver Productos</a></li>
                    <!-- Más enlaces de navegación según sea necesario -->
                </ul>
            </nav>
        </header>
    <!-- Contenido principal de la página -->
        <main>
            <section>
                <div>
                    <?php 
                        // Aquí puedes requerir el archivo Database.php si necesitas interactuar con la base de datos
                        require_once('./app/config/Database.php');
                        
                        if (isset($data)) // if Data exist
                        {
                            if (isset($data['message'])) {
                                echo '<div class="alert alert-warning">';
                                echo $data['message'];
                                echo '</div>';
                            }
                            require_once $data['view'];
                        }
                        else {
                            $userController = new UserController();
                            $data = $userController->listUsers();
                            require 'user/list.php';
                        }
                    ?>
                </div>
            </section>
            <!-- Sección con una breve descripición de la página -->
            <section class='mt-5'>
                <h5>Descripción de la Aplicación</h5>
                <p>Esta es una aplicación web desarrollada en PHP siguiendo el patrón de diseño MVC.</p>
                <!-- Agrega más contenido relevante aquí -->
            </section>
        </main>
    
        <footer>
            <p>&copy; Mikael Hashem K. Tiba</p>
        </footer>

    </div>
</body>
</html>
