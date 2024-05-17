<?php
    $user = $data['user'];
?>
<?php if ($user): ?>
    <!-- Muestra los detalles del usuario -->
    <h1><?php echo $user['nombre']; ?></h1>
    <p>Email: <?php echo $user['email']; ?></p>
    <!-- Más detalles del usuario aquí -->
<?php else: ?>
    <!-- Mensaje que se imprime cuando el usuario no es encontrado -->
    <p>Usuario no encontrado.</p>
<?php endif; ?>