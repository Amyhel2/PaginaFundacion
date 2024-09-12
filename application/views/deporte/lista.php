<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>DEPORTES Y PARTIDOS</h2>
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
                <!-- Default box -->
                <div class="card">
                    <div class="card-body">
                        <a href="<?php echo base_url('index.php/deporte/agregar'); ?>">
                            <button type="button" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Agregar
                            </button>
                        </a>
                        <br>
                        <hr>
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Deporte</th>
                                    <th>Equipo Local</th>
                                    <th>Equipo Visitante</th>
                                    <th>Fecha</th>
                                    <th>Lugar</th>
                                    <th>Resultado Local</th>
                                    <th>Resultado Visitante</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($deportes) && !empty($deportes)) : ?>
                                    <?php
                                    $con = 1;
                                    foreach ($deportes as $row) {
                                        // Formatear la fecha
                                        $fecha = date('d/m/Y', strtotime($row->fecha));
                                    ?>
                                        <tr>
                                            <td><?php echo $con; ?></td>
                                            <td><?php echo $row->deporte; ?></td>
                                            <td><?php echo $row->equipo_local; ?></td>
                                            <td><?php echo $row->equipo_visitante; ?></td>
                                            <td><?php echo $fecha; ?></td>
                                            <td><?php echo $row->lugar; ?></td>
                                            <td><?php echo $row->resultado_local; ?></td>
                                            <td><?php echo $row->resultado_visitante; ?></td>
                                            <td><?php echo ucfirst($row->estado); ?></td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <?php echo form_open("deporte/modificar/{$row->id}"); ?>
                                                    <button type="submit" class="btn btn-success">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <?php echo form_close(); ?>

                                                    <?php echo form_open("deporte/eliminarbd"); ?>
                                                    <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fas fa-trash-alt"></i>
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
                                        <td colspan="10">No hay deportes disponibles.</td>
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
