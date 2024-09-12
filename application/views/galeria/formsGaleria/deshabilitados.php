<div class="card">
    <div class="card-header">
        <h3 class="card-title">Material Académico Deshabilitado</h3>
    </div>
    <!-- /.card-header -->

    <div class="card-body">
        <a href="<?php echo base_url() ?>index.php/materialAcademico/materiales_habilitados">
            <button type="button" class="btn btn-secondary">Ver Materiales Habilitados</button>
        </a>
        <br>
        <br>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Fecha de Publicación</th>
                    <th>Subido Por</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $con = 1;
                foreach ($materiales->result() as $row) {
                ?>
                    <tr>
                        <td><?php echo $con; ?></td>
                        <td><?php echo $row->titulo; ?></td>
                        <td><?php echo $row->descripcion; ?></td>
                        <td><?php echo $row->fecha_publicacion; ?></td>
                        <td><?php echo $row->subido_por; ?></td>
                        <td>
                            <?php
                            echo form_open_multipart("materialAcademico/habilitarbd");
                            ?>
                            <input type="hidden" name="idmaterial_academico" value="<?php echo $row->idmaterial_academico; ?>">
                            <button type="submit" class="btn btn-primary">Habilitar</button>
                            <?php
                            echo form_close();
                            ?>
                        </td>
                    </tr>
                <?php
                    $con++;
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
