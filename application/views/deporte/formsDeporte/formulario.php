<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>AGREGAR DEPORTE</h2>
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
                        <?php echo form_open("deporte/agregarbd"); ?>
                            <div class="form-group">
                                <label for="deporte">Deporte</label>
                                <input type="text" class="form-control" name="deporte" placeholder="Escribe el nombre del deporte" required>
                            </div>

                            <div class="form-group">
                                <label for="equipo_local">Equipo Local</label>
                                <input type="text" class="form-control" name="equipo_local" placeholder="Escribe el nombre del equipo local" required>
                            </div>

                            <div class="form-group">
                                <label for="equipo_visitante">Equipo Visitante</label>
                                <input type="text" class="form-control" name="equipo_visitante" placeholder="Escribe el nombre del equipo visitante" required>
                            </div>

                            <div class="form-group">
                                <label for="fecha">Fecha</label>
                                <input type="datetime-local" class="form-control" name="fecha" required>
                            </div>

                            <div class="form-group">
                                <label for="lugar">Lugar</label>
                                <input type="text" class="form-control" name="lugar" placeholder="Escribe el lugar del evento" required>
                            </div>

                            <div class="form-group">
                                <label for="resultado_local">Resultado Local</label>
                                <input type="number" class="form-control" name="resultado_local" placeholder="Resultado del equipo local" min="0">
                            </div>

                            <div class="form-group">
                                <label for="resultado_visitante">Resultado Visitante</label>
                                <input type="number" class="form-control" name="resultado_visitante" placeholder="Resultado del equipo visitante" min="0">
                            </div>

                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <select class="form-control" name="estado" required>
                                    <option value="pendiente">Pendiente</option>
                                    <option value="jugado">Jugado</option>
                                    <option value="cancelado">Cancelado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea class="form-control" name="descripcion" placeholder="Escribe una breve descripción del evento"></textarea>
                            </div>

                            <button type="submit" class="btn btn-success">
                            <i class="fas fa-plus"></i>Agregar</button>
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
