<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>MODIFICAR NOTICIA</h2>
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
                <h3 class="card-title">Modificar Noticia</h3>
            </div>
             /.card-header -->

            <div class="card-body">
                <?php 
                    echo form_open_multipart("noticia/modificarbd");
                ?>
                    <input type="hidden" name="id" value="<?php echo $noticia->id; ?>">
                    
                    <div class="form-group">
                        <label for="titulo">Título de la Noticia</label>
                        <input type="text" class="form-control" name="titulo" placeholder="Escribe el título de la noticia" value="<?php echo $noticia->titulo; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="contenido">Contenido</label>
                        <textarea class="form-control" name="contenido" placeholder="Escribe el contenido de la noticia" required><?php echo $noticia->contenido; ?></textarea>
                    </div>

                    <!-- Sección para modificar archivos asociados si es necesario -->
                    <!--
                    <div class="form-group">
                        <label for="archivo_actual">Archivo Actual</label>
                        <input type="text" class="form-control" name="archivo_actual" placeholder="Ruta del archivo" value="<?php echo $noticia->archivo; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="nuevo_archivo">Subir Nuevo Archivo</label>
                        <input type="file" class="form-control" name="nuevo_archivo">
                    </div>
                    -->

                    <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> Guardar</button>
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
