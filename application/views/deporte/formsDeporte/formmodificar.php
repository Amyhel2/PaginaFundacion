<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>MODIFICAR DEPORTE</h2>
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
                    <div class="card-body">
                        <?php echo form_open("deporte/modificarbd"); ?>
                            <input type="hidden" name="id" value="<?php echo $deporte->id; ?>">
                            
                            <div class="form-group">
                                <label for="deporte">Deporte</label>
                                <input type="text" class="form-control" name="deporte" placeholder="Escribe el nombre del deporte" value="<?php echo $deporte->deporte; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="equipo_local">Equipo Local</label>
                                <input type="text" class="form-control" name="equipo_local" placeholder="Escribe el nombre del equipo local" value="<?php echo $deporte->equipo_local; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="equipo_visitante">Equipo Visitante</label>
                                <input type="text" class="form-control" name="equipo_visitante" placeholder="Escribe el nombre del equipo visitante" value="<?php echo $deporte->equipo_visitante; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="fecha">Fecha</label>
                                <input type="datetime-local" class="form-control" name="fecha" value="<?php echo date('Y-m-d\TH:i', strtotime($deporte->fecha)); ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="lugar">Lugar</label>
                                <input type="text" class="form-control" name="lugar" placeholder="Escribe el lugar del evento" value="<?php echo $deporte->lugar; ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="resultado_local">Resultado Local</label>
                                <input type="number" class="form-control" name="resultado_local" placeholder="Resultado del equipo local" value="<?php echo $deporte->resultado_local; ?>" min="0">
                            </div>

                            <div class="form-group">
                                <label for="resultado_visitante">Resultado Visitante</label>
                                <input type="number" class="form-control" name="resultado_visitante" placeholder="Resultado del equipo visitante" value="<?php echo $deporte->resultado_visitante; ?>" min="0">
                            </div>

                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <select class="form-control" name="estado" required>
                                    <option value="pendiente" <?php echo $deporte->estado == 'pendiente' ? 'selected' : ''; ?>>Pendiente</option>
                                    <option value="jugado" <?php echo $deporte->estado == 'jugado' ? 'selected' : ''; ?>>Jugado</option>
                                    <option value="cancelado" <?php echo $deporte->estado == 'cancelado' ? 'selected' : ''; ?>>Cancelado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea class="form-control" name="descripcion" placeholder="Escribe una breve descripción del evento"><?php echo $deporte->descripcion; ?></textarea>
                            </div>

                            <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Guardar</button>
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
