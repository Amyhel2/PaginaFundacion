<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>MODIFICAR GALERIA</h2>
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
            <!--<div class="card-header">
                <h3 class="card-title">Modificar Entrada de la Galería</h3>
            </div>
            <!-- /.card-header -->

            <div class="card-body">
                <?php echo form_open_multipart("galeria/modificarbd"); ?>
                    <input type="hidden" name="id" value="<?php echo $galeria->id; ?>">
                    <input type="hidden" name="archivo_actual" value="<?php echo $galeria->ruta_archivo; ?>">

                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <select class="form-control" name="tipo" required>
                            <option value="imagen" <?php echo $galeria->tipo == 'imagen' ? 'selected' : ''; ?>>Imagen</option>
                            <option value="video" <?php echo $galeria->tipo == 'video' ? 'selected' : ''; ?>>Video</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" class="form-control" name="titulo" value="<?php echo $galeria->titulo; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" name="descripcion" required><?php echo $galeria->descripcion; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="archivo">Archivo Actual</label>
                        <input type="text" class="form-control" value="<?php echo $galeria->ruta_archivo; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="archivo">Cambiar Archivo</label>
                        <input type="file" class="form-control" name="archivo">
                    </div>

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
