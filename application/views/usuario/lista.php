<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>USUARIOS</h2>
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
                    <!--<div class="card-header">
                        <h3 class="card-title">USUARIOS</h3>
                    </div>
                     /.card-header -->

                    <div class="card-body">
                        <a href="<?php echo base_url('index.php/usuario/agregar'); ?>" class="btn btn-primary">
                            <i class="fas fa-user-plus"></i> Agregar
                        </a>
                        <a href="<?php echo base_url('index.php/usuario/deshabilitados'); ?>" class="btn btn-secondary">
                            <i class="fas fa-user-times"></i> Ver Deshabilitados
                        </a>
                        <br>
                        <hr>
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nombre</th>
                                    <th>Primer Apellido</th>
                                    <th>Segundo Apellido</th>
                                    <th>Email</th>
                                    <th>Teléfono</th>
                                    <th>Dirección</th>
                                    <th>Fecha de Registro</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($usuarios) && !empty($usuarios)) : ?>
                                    <?php
                                    $con = 1;
                                    foreach ($usuarios as $row) {
                                    ?>
                                        <tr>
                                            <td><?php echo $con; ?></td>
                                            <td><?php echo $row->nombre; ?></td>
                                            <td><?php echo $row->primerApellido; ?></td>
                                            <td><?php echo $row->segundoApellido; ?></td>
                                            <td><?php echo $row->email; ?></td>
                                            <td><?php echo $row->telefono; ?></td>
                                            <td><?php echo $row->direccion; ?></td>
                                            <td><?php echo $row->fechaRegistro; ?></td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <?php echo form_open("usuario/modificar"); ?>
                                                    <input type="hidden" name="idusuario" value="<?php echo $row->idUsuario; ?>">
                                                    <button type="submit" class="btn btn-success">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <?php echo form_close(); ?>

                                                    <?php echo form_open("usuario/eliminarbd"); ?>
                                                    <input type="hidden" name="idusuario" value="<?php echo $row->idUsuario; ?>">
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                    <?php echo form_close(); ?>

                                                    <?php echo form_open("usuario/deshabilitarbd"); ?>
                                                    <input type="hidden" name="idusuario" value="<?php echo $row->idUsuario; ?>">
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="fas fa-user-slash"></i>
                                                    </button>
                                                    <?php echo form_close(); ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                        $con++;
                                    }
                                    ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="9">No hay usuarios disponibles.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
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
