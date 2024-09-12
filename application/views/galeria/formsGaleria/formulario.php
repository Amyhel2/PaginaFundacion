<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>AGREGAR IMAGEN</h2>
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
                <h3 class="card-title">Agregar Nuevo Archivo</h3>
            </div>
             /.card-header -->

            <div class="card-body">
                <?php echo form_open_multipart("galeria/agregarbd"); ?>
                
                <div class="form-group">
                    <label for="tipo">Tipo</label>
                    <select class="form-control" name="tipo" required>
                        <option value="imagen">Imagen</option>
                        <option value="video">Video</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" name="titulo" placeholder="Escribe el título" required>
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea class="form-control" name="descripcion" placeholder="Escribe una descripción"></textarea>
                </div>

                <div class="form-group">
                    <label for="archivo">Seleccionar Archivo</label>
                    <input type="file" class="form-control" name="archivo" required>
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="fas fa-plus"></i> Agregar
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
