<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>MODIFICAR USUARIO</h2>
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
        <div class="row">
            <div class="col-12">
                <div class="card">
                     <!-- <div class="card-header">
                        <h3 class="card-title">Modificar Usuario</h3>
                    </div>
                   /.card-header -->

                    <div class="card-body">
                        <?php 
                            echo form_open_multipart("usuario/modificarbd");
                        ?>
                        <input type="hidden" name="idusuario" value="<?php echo $infousuario->idUsuario; ?>">

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Escribe nombre" value="<?php echo $infousuario->nombre; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="apellido1">Apellido Paterno</label>
                            <input type="text" class="form-control" name="apellido1" placeholder="Escribe Apellido Paterno" value="<?php echo $infousuario->primerApellido; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="apellido2">Apellido Materno</label>
                            <input type="text" class="form-control" name="apellido2" placeholder="Escribe Apellido Materno" value="<?php echo $infousuario->segundoApellido; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" class="form-control" name="email" placeholder="Escribe su Correo" value="<?php echo $infousuario->email; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="text" class="form-control" name="telefono" placeholder="Escribe su Teléfono" value="<?php echo $infousuario->telefono; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" name="direccion" placeholder="Escribe su Dirección" value="<?php echo $infousuario->direccion; ?>" required>
                        </div>

                        <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i> Guardar
                        </button>
                        <?php
                            echo form_close();
                        ?>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
