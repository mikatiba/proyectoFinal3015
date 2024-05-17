<?php
    $user = $data['user'];
?>
    <div class="border border-secondary-300 p-4 ">
        <h2 class='text-info'>Actualizar Usuario</h2>

        <!--Formulario para actualizar los datos -->
        <form action="index.php?url=user/save/<?php echo $user['id']; ?>" method="post" class='form'>
            <div class="form-group mb-3">
                <input type="hidden" name="id" value="<?php echo $user['id']; ?>" required>
                <input type="hidden" name="accion" value="update">
                <!-- Permite ingresar el nombre del usuario -->
                <label>Nombre</label>
                <input type="text" name="nombre" class='form-control' value="<?php echo $user['nombre']; ?>" required>
            </div>
            <!-- Permite ingresar el email del usuario -->
            <div class="form-group mb-3">
                <label>Email</label>
                <input type="email" name="email" class='form-control' value="<?php echo $user['email']; ?>" required>
            </div>
            <!-- Ingresar la nueva contraseña -->
            <div class="form-group mb-3">
                <label>Clave</label>
                <input type="password" name="clave" class='form-control'  placeholder="Nueva Contraseña" 
                    value="<?php echo $user['clave']; ?>" required>            
            </div>
            <div class="form-group">
                <!-- Cancelar la operación o guardar los cambios -->
                <button class='btn btn-secondary'>Cancelar</button>
                <button class='btn btn-primary' type="submit">Guardar</button>            
            </div>
        </form>
    </div>
