<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 position-relative">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Actividades Deportivas</h1>
        <div class="d-inline-flex mb-lg-5">
            <p class="m-0 text-white">
                <a class="text-white" href="<?php echo base_url() ?>index.php/usuario/start">Inicio</a>
            </p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Programas</p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Actividades Deportivas</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Sports Activities Start -->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="section-title text-center position-relative mb-4">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Programas Deportivos</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Deporte 1 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-item bg-light text-center p-4">
                <div class="service-icon bg-primary text-white mb-3">
                    <i class="fa fa-basketball-ball" aria-label="Baloncesto"></i>
                </div>
                <h4 class="mb-3">Baloncesto</h4>
            </div>
        </div>

        <!-- Deporte 2 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-item bg-light text-center p-4">
                <div class="service-icon bg-primary text-white mb-3">
                    <i class="fa fa-volleyball-ball" aria-label="Voleibol"></i>
                </div>
                <h4 class="mb-3">Voleibol</h4>
            </div>
        </div>

        <!-- Deporte 3 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-item bg-light text-center p-4">
                <div class="service-icon bg-primary text-white mb-3">
                    <i class="fa fa-football-ball" aria-label="Fútbol"></i>
                </div>
                <h4 class="mb-3">Fútbol</h4>
            </div>
        </div>

        <!-- Deporte 4 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-item bg-light text-center p-4">
                <div class="service-icon bg-primary text-white mb-3">
                    <i class="fa fa-table-tennis" aria-label="Tenis de mesa"></i>
                </div>
                <h4 class="mb-3">Tenis de Mesa</h4>
            </div>
        </div>

        <!-- Deporte 5 -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-item bg-light text-center p-4">
                <div class="service-icon bg-primary text-white mb-3">
                    <i class="fa fa-swimmer" aria-label="Natación"></i>
                </div>
                <h4 class="mb-3">Natación</h4>
            </div>
        </div>
    </div>
</div>
<!-- Sports Activities End -->


<!-- Match Schedule Start -->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="section-title text-center position-relative mb-4">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Partidos Programados</h4>
            </div>
        </div>
    </div>
    <div class="table-container">
        <div class="table-title mb-4">
            <h2>Programación de Partidos</h2>
        </div>
        <?php if (!empty($partidos)): ?>
            <table class="table table-striped table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Equipo Local</th>
                        <th>Equipo Visitante</th>
                        <th>Fecha</th>
                        <th>Lugar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($partidos as $index => $partido): ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo !empty($partido->equipo_local) ? $partido->equipo_local : 'No disponible'; ?></td>
                            <td><?php echo !empty($partido->equipo_visitante) ? $partido->equipo_visitante : 'No disponible'; ?></td>
                            <td><?php echo !empty($partido->fecha) ? date('d/m/Y H:i', strtotime($partido->fecha)) : 'No disponible'; ?></td>
                            <td><?php echo !empty($partido->lugar) ? $partido->lugar : 'No disponible'; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="text-center">No hay partidos programados en este momento.</p>
        <?php endif; ?>
    </div>
</div>
<!-- Match Schedule End -->


<!-- Match Schedule Start -->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="section-title text-center position-relative mb-4">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Tabla de Posicionamiento</h4>
            </div>
        </div>
    </div>
    <div class="table-container">
        <div class="table-title mb-4">
            <h2>Posicionamiento por Puntaje</h2>
        </div>
        <?php if (!empty($deportes)): ?>
            <table class="table table-striped table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Deporte</th>
                        <th>Equipo Local</th>
                        <th>Equipo Visitante</th>
                        <th>Puntaje Local</th>
                        <th>Puntaje Visitante</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($deportes as $index => $deporte): ?>
                        <tr>
                            <td><?php echo $index + 1; ?></td>
                            <td><?php echo !empty($deporte->deporte) ? $deporte->deporte : 'No disponible'; ?></td>
                            <td><?php echo !empty($deporte->equipo_local) ? $deporte->equipo_local : 'No disponible'; ?></td>
                            <td><?php echo !empty($deporte->equipo_visitante) ? $deporte->equipo_visitante : 'No disponible'; ?></td>
                            <td><?php echo !empty($deporte->puntaje_local) ? $deporte->puntaje_local : 'No disponible'; ?></td>
                            <td><?php echo !empty($deporte->puntaje_visitante) ? $deporte->puntaje_visitante : 'No disponible'; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="text-center">No hay partidos programados en este momento.</p>
        <?php endif; ?>
    </div>
</div>
<!-- Match Schedule End -->


