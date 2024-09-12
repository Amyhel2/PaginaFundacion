 <!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row justify-content-center w-100">
        <div class="col-md-6 col-lg-4 col-sm-8">
            <div class="card shadow-lg border-0">
                <div class="card-body p-4">
                    <h2 class="text-center mb-4">Iniciar Sesión</h2>
                    <?php echo form_open_multipart("usuario/validarusuario"); ?>
                        <div class="form-group">
                            <label for="login" class="sr-only">Login</label>
                            <input type="text" class="form-control form-control-lg rounded-pill" name="login" placeholder="Nombre de usuario" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" class="form-control form-control-lg rounded-pill" name="password" placeholder="Contraseña" required>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary btn-block btn-lg rounded-pill">Ingresar</button>
                        </div>
                    <?php echo form_close(); ?>
                    <div class="text-center mt-3">
                        <a href="#" class="text-muted">¿Olvidaste tu contraseña?</a>
                    </div>
                    <div class="text-center mt-2">
                        <a href="<?php echo base_url() ?>index.php/usuario/registrar" class="text-muted">¿No tienes una cuenta? Regístrate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
