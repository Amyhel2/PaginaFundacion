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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- <div class="card-header">
                        <h3 class="card-title">Agregar Nuevo Usuario</h3>
                    </div>
                    /.card-header -->

                    <div class="card-body">
                        <?php 
                            echo form_open_multipart("usuario/agregarbd");
                        ?>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Escribe nombre" required>
                        </div>

                        <div class="form-group">
                            <label for="apellido1">Apellido Paterno</label>
                            <input type="text" class="form-control" name="apellido1" placeholder="Escribe Apellido Paterno" required>
                        </div>

                        <div class="form-group">
                            <label for="apellido2">Apellido Materno</label>
                            <input type="text" class="form-control" name="apellido2" placeholder="Escribe Apellido Materno" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" class="form-control" name="email" placeholder="Escribe su Correo" required>
                        </div>

                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="text" class="form-control" name="telefono" placeholder="Escribe su Teléfono" required>
                        </div>

                        <div class="form-group">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" name="direccion" placeholder="Escribe su Dirección" required>
                        </div>

                        <div class="form-group">
                            <label for="contraseña">Contraseña</label>
                            <input type="password" class="form-control" name="contraseña" placeholder="Escribe su Contraseña" required>
                        </div>

                        <div class="form-group">
                            <label for="username">Nombre de Usuario</label>
                            <input type="text" class="form-control" name="username" placeholder="Escribe su Nombre de Usuario" required>
                        </div>

                        <div class="form-group">
                            <label for="rol">Rol</label>
                            <input type="text" class="form-control" name="rol" placeholder="Escribe su Rol" required>
                        </div>

                        <button type="submit" class="btn btn-success">
                        <i class="fas fa-plus"></i> Agregar

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

