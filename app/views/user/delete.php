<?php
    $user = $data['user'];
?>
    <div class="border border-secondary-300 p-4 ">
        <h2 class='text-info'>Borrar Usuario</h2>
        <!-- Formulario para confirmar la eliminación del usuario -->
        <form action="index.php?url=user/remove/<?php echo $user['id']; ?>" method="post" class='form'>
            <div class="form-group mb-3">
                <input type="hidden" name="id" value="<?php echo $user['id']; ?>" required>
                <input type="hidden" name="accion" value="update">
                <!--Muestr el nombre del usuario que se va a eliminar -->
                <label>Nombre</label>
                <input type="text" name="nombre" class='form-control' value="<?php echo $user['nombre']; ?>" readonly>
            </div>
            <!-- muestra el email del usuario que se va a eliminar -->
            <div class="form-group mb-3">
                <label>Email</label>
                <input type="email" name="email" class='form-control' value="<?php echo $user['email']; ?>" readonly>
            </div>
            <div class="form-group">
                <div class="row alert alert-danger">
                    <div class="col-8">
                        <!-- confirmación de la eliminación del usuario -->
                        <h3>¿Está seguro que desea borrar el récord?</h3>
                    </div>
                    <div class="col text-end">
                        <a href='.' class='btn btn-secondary'>Cancelar</a>
                        <button class='btn btn-primary' type="submit">Borrar</button>            
                    </div>
                </div>
            </div>
        </form>
    </div>
