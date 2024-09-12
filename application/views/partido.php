<!-- Match Schedule Start -->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="section-title text-center position-relative mb-4">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Agregar Partido</h6>
                <h1 class="display-4">Nuevo Partido</h1>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <form action="<?php echo base_url(); ?>index.php/partido/agregar" method="post">
                <div class="mb-3">
                    <label for="equipo_local" class="form-label">Equipo Local</label>
                    <input type="text" class="form-control" id="equipo_local" name="equipo_local" required>
                </div>
                <div class="mb-3">
                    <label for="equipo_visitante" class="form-label">Equipo Visitante</label>
                    <input type="text" class="form-control" id="equipo_visitante" name="equipo_visitante" required>
                </div>
                <div class="mb-3">
                    <label for="fecha_partido" class="form-label">Fecha del Partido</label>
                    <input type="date" class="form-control" id="fecha_partido" name="fecha_partido" required>
                </div>
                <div class="mb-3">
                    <label for="hora_partido" class="form-label">Hora del Partido</label>
                    <input type="time" class="form-control" id="hora_partido" name="hora_partido" required>
                </div>
                <div class="mb-3">
                    <label for="ubicacion" class="form-label">Ubicación</label>
                    <input type="text" class="form-control" id="ubicacion" name="ubicacion" required>
                </div>
                <button type="submit" class="btn btn-primary">Agregar Partido</button>
            </form>
        </div>
    </div>
</div>
<!-- Match Schedule End -->
