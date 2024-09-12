<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>AGREGAR TESTIMONIO</h2>
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
                        <h3 class="card-title">Agregar Nuevo Testimonio</h3>
                    </div>
                     /.card-header -->

                    <div class="card-body">
                        <?php echo form_open_multipart("testimonio/agregarbd"); // Adaptado a la ruta del controlador 'testimonio' ?>
                            
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" placeholder="Escribe el nombre del testigo" required>
                            </div>

                            <div class="form-group">
                                <label for="cargo">Cargo</label>
                                <input type="text" class="form-control" name="cargo" placeholder="Escribe el cargo del testigo" required>
                            </div>

                            <div class="form-group">
                                <label for="testimonio">Testimonio</label>
                                <textarea class="form-control" name="testimonio" placeholder="Escribe el testimonio" required></textarea>
                            </div>

                            <!-- Puedes agregar un campo para la fecha si es necesario, aunque no está en la tabla actual -->
                            <!--
                            <div class="form-group">
                                <label for="fechaPublicacion">Fecha de Publicación</label>
                                <input type="date" class="form-control" name="fechaPublicacion" placeholder="Selecciona la fecha de publicación">
                            </div>
                            -->

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
