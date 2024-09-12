<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>USUARIOS DESHABILITADOS</h2>
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
                        <h3 class="card-title">Usuarios Deshabilitados</h3>
                    </div>
                    /.card-header -->

                    <div class="card-body">
                        <a href="<?php echo base_url('index.php/usuario/usuarios'); ?>" class="btn btn-secondary">
                            <i class="fas fa-user-check"></i> Ver Habilitados
                        </a>
                        <br><br>
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
                                    <th>Habilitar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $con = 1;
                                foreach ($usuarios->result() as $row) {
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
                                            <?php
                                            echo form_open("usuario/habilitarbd");
                                            ?>
                                            <input type="hidden" name="idusuario" value="<?php echo $row->idUsuario; ?>">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fas fa-check"></i> Habilitar
                                            </button>
                                            <?php
                                            echo form_close();
                                            ?>
                                        </td>
                                    </tr>
                                <?php
                                    $con++;
                                }
                                ?>
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
