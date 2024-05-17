
    <div class="border border-secondary-300 p-4 ">
        <h2 class='text-info'>Crear Usuario</h2>

        <form action="index.php?url=user/save/0" method="post" class='form'>
            <div class="form-group mb-3">
                <input type="hidden" name="id" value="0" required>
                <input type="hidden" name="accion" value="create">
                <!--ingresar el nombre -->
                <label>Nombre</label>
                <input type="text" name="nombre" class='form-control' value="" required>
            </div>
                <!--ingresar email -->
            <div class="form-group mb-3">
                <label>Email</label>
                <input type="email" name="email" class='form-control' value="" required>
            </div>
            <!--ingresar contraseña-->
            <div class="form-group mb-3">
                <label>Clave</label>
                <input type="password" name="clave" class='form-control'  placeholder="Nueva Contraseña" 
                    value="" required>     
                    <!--Cancelar operación -->       
            </div>
            <div class="form-group">
                <a href='.' class='btn btn-secondary'>Cancelar</a>
                <button class='btn btn-primary' type="submit">Guardar</button>            
            </div>
        </form>
    </div>
