<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>AGREGAR MATERIAL</h2>
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
        <!-- Default box -->
        <div class="card">
            <!--<div class="card-header">
                <h3 class="card-title">Agregar Nuevo Material Académico</h3>
            </div>-->

            <div class="card-body">
                <form action="<?php echo base_url('index.php/materialAcademico/registrar'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" class="form-control" name="titulo" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" name="descripcion" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="categoria">Categoría</label>
                        <input type="text" class="form-control" name="categoria" required>
                    </div>

                    <div class="form-group">
                        <label for="archivo">Archivo (Opcional)</label>
                        <input type="file" class="form-control" name="archivo">
                    </div>

                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-plus"></i> Agregar
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

