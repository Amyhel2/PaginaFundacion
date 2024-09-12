<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>MODIFICAR TESTIMONIO</h2>
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
                        <h3 class="card-title">Modificar Testimonio</h3>
                    </div>
                    /.card-header -->

                    <div class="card-body">
                        <?php echo form_open_multipart("testimonio/modificarbd"); ?>
                            <input type="hidden" name="id" value="<?php echo $testimonio->id; ?>"> <!-- id del testimonio -->
                            
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre del testigo" value="<?php echo $testimonio->nombre; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="cargo">Cargo</label>
                                <input type="text" class="form-control" name="cargo" placeholder="Cargo del testigo" value="<?php echo $testimonio->cargo; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="testimonio">Testimonio</label>
                                <textarea class="form-control" name="testimonio" placeholder="Escribe el testimonio" required><?php echo $testimonio->testimonio; ?></textarea>
                            </div>

                            <!-- Si el testimonio tiene un archivo asociado (puedes agregar un campo para esto más tarde si es necesario) -->
                            <!--
                            <div class="form-group">
                                <label for="archivo_actual">Archivo Actual</label>
                                <input type="text" class="form-control" name="archivo_actual" placeholder="Ruta del archivo" value="<?php echo $testimonio->archivo; ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label for="nuevo_archivo">Subir Nuevo Archivo</label>
                                <input type="file" class="form-control" name="nuevo_archivo">
                            </div>
                            -->

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
