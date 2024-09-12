<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>NOTICIAS</h2>
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
                        <h3 class="card-title">Lista de Noticias</h3>
                    </div>
                     /.card-header -->

                    <div class="card-body">
                        <a href="<?php echo base_url('index.php/noticia/agregar'); ?>">
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
                                    <th>Título</th>
                                    <th>Descripción</th>
                                    <th>Fecha de Publicación</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($noticias) && !empty($noticias)) : ?>
                                    <?php
                                    $con = 1;
                                    foreach ($noticias as $row) {
                                        // Formatear la fecha de publicación
                                        $fechaPublicacion = date('d/m/Y H:i:s', strtotime($row->fechaPublicacion));
                                    ?>
                                        <tr>
                                            <td><?php echo $con; ?></td>
                                            <td><?php echo $row->titulo; ?></td>
                                            <td><?php echo $row->contenido; ?></td>
                                            <td><?php echo $fechaPublicacion; ?></td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <?php echo form_open("noticia/modificar/{$row->id}"); ?>
                                                    <button type="submit" class="btn btn-success">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <?php echo form_close(); ?>

                                                    <?php echo form_open("noticia/eliminarbd"); ?>
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
                                        <td colspan="5">No hay noticias disponibles.</td>
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
