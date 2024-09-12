<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>GALERIA</h2>
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
                <h3 class="card-title">Lista de Archivos de la Galería</h3>
            </div>
             /.card-header -->

            <div class="card-body">
                <a href="<?php echo base_url('index.php/galeria/agregar'); ?>">
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
                            <th>Tipo</th>
                            <th>Título</th>
                            <th>Descripción</th>
                            <th>Vista Previa</th>
                            <th>Ruta del Archivo</th>
                            <th>Fecha de Subida</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="galeria-imagenes">
                        <?php if (isset($archivos) && !empty($archivos)) : ?>
                            <?php
                            $con = 1;
                            foreach ($archivos as $row) {
                                // Formatear la fecha de subida
                                $fechaSubida = date('d/m/Y H:i:s', strtotime($row->fechaSubida));
                            ?>
                                <tr>
                                    <td><?php echo $con; ?></td>
                                    <td><?php echo ucfirst($row->tipo); ?></td>
                                    <td><?php echo $row->titulo; ?></td>
                                    <td><?php echo $row->descripcion; ?></td>
                                    <td>
                                        <?php if ($row->tipo == 'imagen') : ?>
                                            <img src="<?php echo base_url('uploads/' . $row->ruta_archivo); ?>" alt="<?php echo $row->titulo; ?>" style="max-width: 100px; max-height: 100px;">
                                        <?php elseif ($row->tipo == 'video') : ?>
                                            <video width="160" height="120" controls>
                                                <source src="<?php echo base_url('uploads/' . $row->ruta_archivo); ?>" type="video/mp4">
                                                Tu navegador no soporta el video.
                                            </video>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo $row->ruta_archivo; ?></td>
                                    <td><?php echo $fechaSubida; ?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <?php echo form_open("galeria/modificar/{$row->id}"); ?>
                                            <button type="submit" class="btn btn-success">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <?php echo form_close(); ?>

                                            <?php echo form_open("galeria/eliminarbd"); ?>
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
                                <td colspan="8">No hay archivos disponibles.</td>
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Selecciona todas las imágenes dentro de .galeria-imagenes
        var imagenes = document.querySelectorAll('.galeria-imagenes img');

        // Recorre todas las imágenes y ajusta su tamaño
        imagenes.forEach(function(imagen) {
            imagen.style.width = '300px';  // Cambia el ancho
            imagen.style.height = '200px'; // Cambia la altura
        });
    });
</script>
