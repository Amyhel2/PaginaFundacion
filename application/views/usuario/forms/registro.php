<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row justify-content-center w-100">
        <div class="col-md-6 col-lg-4 col-sm-8">
            <div class="card shadow-lg border-0">
                <div class="card-body p-4">
                    <h2 class="text-center mb-4">Registro</h2>
                    <?php echo form_open_multipart("usuario/registrar"); ?>
                        <div class="form-group">
                            <label for="nombre" class="sr-only">Nombre</label>
                            <input type="text" class="form-control form-control-lg rounded-pill" name="nombre" placeholder="Nombre" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="primerApellido" class="sr-only">Primer Apellido</label>
                            <input type="text" class="form-control form-control-lg rounded-pill" name="primerApellido" placeholder="Primer Apellido" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="segundoApellido" class="sr-only">Segundo Apellido</label>
                            <input type="text" class="form-control form-control-lg rounded-pill" name="segundoApellido" placeholder="Segundo Apellido">
                        </div>
                        <div class="form-group mt-3">
                            <label for="email" class="sr-only">Correo Electrónico</label>
                            <input type="email" class="form-control form-control-lg rounded-pill" name="email" placeholder="Correo Electrónico" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="telefono" class="sr-only">Teléfono</label>
                            <input type="text" class="form-control form-control-lg rounded-pill" name="telefono" placeholder="Teléfono">
                        </div>
                        <div class="form-group">
                            <label for="username" class="sr-only">Usuario</label>
                            <input type="text" class="form-control form-control-lg rounded-pill" name="username" placeholder="Nombre de usuario" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="direccion" class="sr-only">Dirección</label>
                            <input type="text" class="form-control form-control-lg rounded-pill" name="direccion" placeholder="Dirección">
                        </div>
                        <div class="form-group mt-3">
                            <label for="password" class="sr-only">Contraseña</label>
                            <input type="password" class="form-control form-control-lg rounded-pill" name="password" placeholder="Contraseña" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="confirm_password" class="sr-only">Confirmar Contraseña</label>
                            <input type="password" class="form-control form-control-lg rounded-pill" name="confirm_password" placeholder="Confirmar Contraseña" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="rol">Rol</label>
                            <select class="form-control form-control-lg rounded-pill" name="rol" required>
                                <!--<option value="admin">Administrador</option>-->
                                <option value="usuario">Usuario</option>
                            </select>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary btn-block btn-lg rounded-pill">Registrarse</button>
                        </div>
                    <?php echo form_close(); ?>
                    <div class="text-center mt-3">
                        <a href="<?php echo base_url() ?>index.php/usuario/login" class="text-muted">¿Ya tienes una cuenta? Inicia sesión</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>