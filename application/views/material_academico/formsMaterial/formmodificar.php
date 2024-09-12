<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>MODIFICAR MATERIAL</h2>
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
            <!-- /<div class="card-header">
                <h3 class="card-title">Modificar Material Académico</h3>
            </div>
            .card-header -->

            <div class="card-body">
                <?php echo form_open_multipart('materialAcademico/modificarbd'); ?>
                    <!-- ID del material y archivo actual -->
                    <input type="hidden" name="id" value="<?php echo $material->id; ?>">
                    <input type="hidden" name="archivo_actual" value="<?php echo $material->ruta_archivo; ?>">
                    
                    <!-- Campo Título -->
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" class="form-control" name="titulo" value="<?php echo set_value('titulo', $material->titulo); ?>" required>
                    </div>
                    
                    <!-- Campo Descripción -->
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" name="descripcion" required><?php echo set_value('descripcion', $material->descripcion); ?></textarea>
                    </div>

                    <!-- Campo Categoría -->
                    <div class="form-group">
                        <label for="categoria">Categoría</label>
                        <input type="text" class="form-control" name="categoria" value="<?php echo set_value('categoria', $material->categoria); ?>" required>
                    </div>

                    <!-- Campo de archivo -->
                    <div class="form-group">
                        <label for="archivo">Archivo (Opcional)</label>
                        <input type="file" class="form-control" name="archivo">
                        <?php if (!empty($material->ruta_archivo)): ?>
                            <p>Archivo actual: <a href="<?php echo base_url('uploads/' . $material->ruta_archivo); ?>" target="_blank"><?php echo $material->ruta_archivo; ?></a></p>
                        <?php else: ?>
                            <p>No hay archivo subido actualmente.</p>
                        <?php endif; ?>
                    </div>
                    
                    <!-- Botón de enviar -->
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i> Guardar
                    </button>
                <?php echo form_close(); ?>
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


