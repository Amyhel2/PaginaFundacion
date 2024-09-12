<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>MATERIAL ACADEMICO</h2>
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
                    <div class="card-body">
                         <!--<div class="card-header">
                            <h3 class="card-title">Lista de Material</h3>
                        </div>
                        /.card-header -->
                        <a href="<?php echo base_url('index.php/materialAcademico/registrar'); ?>">
                            <button type="button" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Agregar
                            </button>
                        </a>
                        <br>
                        <hr>
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Título</th>
                                    <th>Descripción</th>
                                    <th>Categoría</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($materiales) && !empty($materiales)) : ?>
                                    <?php foreach ($materiales as $material): ?>
                                        <tr>
                                            <td><?php echo $material->titulo; ?></td>
                                            <td><?php echo $material->descripcion; ?></td>
                                            <td><?php echo $material->categoria; ?></td>
                                            <td>
                                            <div class="btn-group" role="group">
    <?php echo form_open("materialAcademico/modificar"); ?>
    <input type="hidden" name="idMaterial" value="<?php echo $material->id; ?>">
    <button type="submit" class="btn btn-success">
        <i class="fas fa-edit"></i>
    </button>
    <?php echo form_close(); ?>

    <?php echo form_open("materialAcademico/eliminar"); ?>
    <input type="hidden" name="idMaterial" value="<?php echo $material->id; ?>">
    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este material?')">
        <i class="fas fa-trash-alt"></i>
    </button>
    <?php echo form_close(); ?>
</div>

                                                
                                                
                                            
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="4">No hay materiales disponibles.</td>
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
