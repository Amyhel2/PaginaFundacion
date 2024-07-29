<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 position-relative ">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Actividades Deportivas</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="<?php echo base_url() ?>index.php/estudiante/principal">Inicio</a></p>
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
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item bg-light text-center p-4">
                    <div class="service-icon bg-primary text-white mb-3">
                        <i class="fa fa-futbol"></i>
                    </div>
                    <h4 class="mb-3">Fútbol</h4>
                    <p>Nuestro programa de fútbol no solo enseña habilidades técnicas del deporte, sino también valores como el trabajo en equipo y la disciplina.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item bg-light text-center p-4">
                    <div class="service-icon bg-primary text-white mb-3">
                        <i class="fa fa-basketball-ball"></i>
                    </div>
                    <h4 class="mb-3">Baloncesto</h4>
                    <p>El baloncesto es una excelente manera de promover la actividad física y enseñar a los niños la importancia de la perseverancia y el esfuerzo constante.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item bg-light text-center p-4">
                    <div class="service-icon bg-primary text-white mb-3">
                        <i class="fa fa-swimmer"></i>
                    </div>
                    <h4 class="mb-3">Natación</h4>
                    <p>Nuestras clases de natación ayudan a los niños a desarrollar confianza en el agua y a mejorar su condición física general mientras se divierten.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item bg-light text-center p-4">
                    <div class="service-icon bg-primary text-white mb-3">
                        <i class="fa fa-running"></i>
                    </div>
                    <h4 class="mb-3">Atletismo</h4>
                    <p>El programa de atletismo fomenta la superación personal y el desarrollo de habilidades físicas fundamentales en un entorno de apoyo.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item bg-light text-center p-4">
                    <div class="service-icon bg-primary text-white mb-3">
                        <i class="fa fa-volleyball-ball"></i>
                    </div>
                    <h4 class="mb-3">Voleibol</h4>
                    <p>El voleibol es ideal para aprender coordinación, trabajo en equipo y comunicación efectiva en un ambiente dinámico y divertido.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item bg-light text-center p-4">
                    <div class="service-icon bg-primary text-white mb-3">
                        <i class="fa fa-dumbbell"></i>
                    </div>
                    <h4 class="mb-3">Entrenamiento físico</h4>
                    <p>Nuestro programa de entrenamiento físico está diseñado para mejorar la fuerza, la resistencia y la flexibilidad de los niños a través de diversas actividades.</p>
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
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Rol de Partidos</h6>
                    <h1 class="display-4">Próximos Partidos</h1>
                </div>
            </div>
        </div>
        <style>
        .table-container {
            max-width: 600px;
            margin: auto;
            margin-top: 20px;
        }
        .table-title {
            background-color: #2c3e50;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .table th, .table td {
            text-align: center;
        }
        .table thead th {
            background-color: #f8f9fa;
        }
        .flag {
            width: 20px;
            height: auto;
        }
    </style>


<div class="table-container">
    <div class="table-title">
        <h4>Tabla de medallería - Delegaciones</h4>
    </div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Delegaciones</th>
                <th>🥇</th>
                <th>🥈</th>
                <th>🥉</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><img src="path_to_flag_colombia" alt="Colombia" class="flag"> Colombia</td>
                <td>73</td>
                <td>51</td>
                <td>55</td>
                <td>179</td>
            </tr>
            <tr>
                <td>2</td>
                <td><img src="path_to_flag_venezuela" alt="Venezuela" class="flag"> Venezuela</td>
                <td>63</td>
                <td>48</td>
                <td>46</td>
                <td>157</td>
            </tr>
            <tr>
                <td>3</td>
                <td><img src="path_to_flag_chile" alt="Chile" class="flag"> Chile</td>
                <td>30</td>
                <td>40</td>
                <td>47</td>
                <td>117</td>
            </tr>
            <tr>
                <td>4</td>
                <td><img src="path_to_flag_ecuador" alt="Ecuador" class="flag"> Ecuador</td>
                <td>25</td>
                <td>32</td>
                <td>32</td>
                <td>89</td>
            </tr>
            <tr>
                <td>5</td>
                <td><img src="path_to_flag_peru" alt="Perú" class="flag"> Perú</td>
                <td>20</td>
                <td>26</td>
                <td>54</td>
                <td>100</td>
            </tr>
            <tr>
                <td>6</td>
                <td><img src="path_to_flag_bolivia" alt="Bolivia" class="flag"> Bolivia</td>
                <td>9</td>
                <td>19</td>
                <td>39</td>
                <td>67</td>
            </tr>
            <tr>
                <td>7</td>
                <td><img src="path_to_flag_panama" alt="Panamá" class="flag"> Panamá</td>
                <td>7</td>
                <td>7</td>
                <td>11</td>
                <td>25</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Team ODEBO</td>
                <td>0</td>
                <td>1</td>
                <td>0</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>
</div>



    </div>
    <!-- Match Schedule End -->


    <!-- Call to Action Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h1 class="display-4 text-white">¡Participa en nuestras actividades deportivas!</h1>
                    <p class="text-white">Contáctanos para obtener más información sobre nuestros programas y cómo puedes inscribir a tus hijos.</p>
                    <a href="contact.html" class="btn btn-primary mt-3 py-2 px-4">Contáctanos</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action End -->


    <!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>