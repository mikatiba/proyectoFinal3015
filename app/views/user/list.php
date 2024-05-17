<?php
// Obtener los usuarios del arreglo 
$users = $data['users'];
?>

<div class="container-fluid">
    <!-- Encabezado -->
    <div class="row">
        <div class="col">
            <h1>Usuarios</h1>
        </div>
    </div>
    <!-- Tabla para mostrar la lista de usuarios -->
    <div class="row">
        <div class="col">
            <table class='table'>
                <thead>
                    <!-- Encabezados de la tabla -->
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th class='text-center'>
                            <!-- Enlace para crear un nuevo usuario -->
                            <a href='index.php?url=user/create/' class='btn btn-primary'>Crear</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <!-- Filas de la tabla, una por cada usuario -->
                        <tr>
                            <!-- Nombre del usuario -->
                            <td><?php echo htmlspecialchars($user['nombre'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <!-- Email del usuario -->
                            <td><?php echo htmlspecialchars($user['email'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <!-- Enlaces para editar y borrar el usuario -->
                            <td class='text-center'>
                                <a href='index.php?url=user/update/<?php echo htmlspecialchars($user['id'], ENT_QUOTES, 'UTF-8'); ?>' class='btn btn-success'>Editar</a>
                                <a href='index.php?url=user/delete/<?php echo htmlspecialchars($user['id'], ENT_QUOTES, 'UTF-8'); ?>' class='btn btn-danger'>Borrar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
