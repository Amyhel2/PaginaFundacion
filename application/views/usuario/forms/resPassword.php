<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>AGREGAR USUARIO</h2>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">
                        <?php echo date('Y/m/d H:i:s'); ?>
                    </li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
    <h1>Olvidé mi Contraseña</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('auth/forgot_password'); ?>
        <label for="email">Correo Electrónico:</label>
        <input type="text" name="email" id="email" />
        <input type="submit" name="submit" value="Enviar" />
    <?php echo form_close(); ?>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->

