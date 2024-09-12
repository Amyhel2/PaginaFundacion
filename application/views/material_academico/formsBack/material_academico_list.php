<div class="container">
    <h2>Material Académico</h2>
    <div class="row">
        <div class="col-lg-12">
            <!-- Aquí va la tabla de materiales académicos -->
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Título</th>
                        <th>Descripción</th>
                        <th>Categoria</th>
                        <th>Fecha de Subida</th>
                        <th>Subido Por</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($materiales) && !empty($materiales)) : ?>
                        <?php
                        $con = 1;
                        foreach ($materiales as $material) :
                            // Aquí puedes organizar los materiales por categoría si es necesario
                        ?>
                            <tr>
                                <td><?php echo $con; ?></td>
                                <td><?php echo $material->titulo; ?></td>
                                <td><?php echo $material->descripcion; ?></td>
                                <td><?php echo $material->categoria; ?></td>
                                <td><?php echo $material->fecha_subida; ?></td>
                                <td><?php echo $material->subido_por; ?></td>
                                <td>
                                    <!-- Enlace para descargar el material -->
                                    <a href="<?php echo base_url('index.php/materialAcademico/descargar/'.$material->id); ?>" class="btn btn-primary">Descargar</a>
                                </td>
                            </tr>
                        <?php
                            $con++;
                        endforeach;
                        ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="7">No hay material académico disponible.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
