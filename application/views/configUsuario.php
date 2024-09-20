<!-- Configuración del Usuario -->
<section class="content">
    <div class="container-fluid">
        <h2>Configuración del Usuario</h2>
        
        <!-- Información básica del usuario -->
        <div class="card">
            <div class="card-body">
                <h5>Información Personal</h5>
                <p><strong>Nombre:</strong> <?php echo $usuario->nombre; ?></p>
                <p><strong>Primer Apellido:</strong> <?php echo $usuario->primerApellido; ?></p>
                <p><strong>Segundo Apellido:</strong> <?php echo $usuario->segundoApellido; ?></p>
                <p><strong>Email:</strong> <?php echo $usuario->email; ?></p>
                <p><strong>Teléfono:</strong> <?php echo $usuario->telefono; ?></p>
                <p><strong>Dirección:</strong> <?php echo $usuario->direccion; ?></p>
            </div>
        </div>

        <!-- Formulario para cambiar la contraseña -->
        <div class="card">
            <div class="card-body">
                <h5>Cambiar Contraseña</h5>
                <?php echo form_open('usuario/cambiar_password'); ?>
                <div class="form-group">
                    <label for="password_actual">Contraseña Actual</label>
                    <input type="password" class="form-control" name="password_actual" required>
                </div>
                <div class="form-group">
                    <label for="password_nueva">Nueva Contraseña</label>
                    <input type="password" class="form-control" name="password_nueva" required>
                </div>
                <div class="form-group">
                    <label for="confirmar_password">Confirmar Nueva Contraseña</label>
                    <input type="password" class="form-control" name="confirmar_password" required>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar Contraseña</button>
                <?php echo form_close(); ?>
            </div>
        </div>

        <!-- Botón para cerrar sesión -->
        <div class="card">
            <div class="card-body">
                <a href="<?php echo base_url('usuario/cerrar_sesion'); ?>" class="btn btn-danger">Cerrar Sesión</a>
            </div>
        </div>

    </div>
</section>
