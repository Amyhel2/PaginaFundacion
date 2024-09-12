<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>AGREGAR NOTICIA</h2>
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
                <h3 class="card-title">Agregar Noticia</h3>
            </div>
             /.card-header -->

            <div class="card-body">
                <?php 
                    echo form_open_multipart("noticia/agregarbd"); // Adaptado a la ruta del controlador 'noticia'
                ?>
                <div class="form-group">
                    <label for="titulo">Título de la Noticia</label>
                    <input type="text" class="form-control" name="titulo" placeholder="Escribe el título de la noticia" required>
                </div>

                <div class="form-group">
                    <label for="contenido">Contenido</label>
                    <textarea class="form-control" name="contenido" placeholder="Escribe el contenido de la noticia" required></textarea>
                </div>

                <div class="form-group">
                    <label for="fechaPublicacion">Fecha de Publicación</label>
                    <input type="date" class="form-control" name="fechaPublicacion" required>
                </div>

                <button type="submit" class="btn btn-success">
                <i class="fas fa-plus"></i> Agregar</button>
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
