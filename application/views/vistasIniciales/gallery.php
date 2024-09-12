  <!-- Page Header Start -->
<div class="container-fluid page-header mb-5 position-relative">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Galeria</h1>
        <div class="d-inline-flex mb-lg-5">
            <p class="m-0 text-white"><a class="text-white" href="<?php echo base_url() ?>index.php/usuario/start">Inicio</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Galeria</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Gallery Start -->
<div class="container py-5 galeria-imagenes" >
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="section-title text-center position-relative mb-4">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Recuerdos memorables</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <?php if (isset($archivos) && !empty($archivos)) : ?>
            <?php foreach ($archivos as $archivo) : ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="gallery-item position-relative overflow-hidden">
                        <?php if ($archivo->tipo == 'imagen') : ?>
                            <img class="img-fluid w-100" src="<?php echo base_url('uploads/' . $archivo->ruta_archivo); ?>" alt="<?php echo $archivo->titulo; ?>">
                            <div class="gallery-overlay">
                                <a class="btn btn-outline-light" href="<?php echo base_url('uploads/' . $archivo->ruta_archivo); ?>" data-lightbox="gallery"><i class="fa fa-search"></i></a>
                            </div>
                        <?php elseif ($archivo->tipo == 'video') : ?>
                            <video width="100%" height="auto" controls>
                                <source src="<?php echo base_url('uploads/' . $archivo->ruta_archivo); ?>" type="video/mp4">
                                Tu navegador no soporta el video.
                            </video>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="col-12">
                <p>No hay archivos disponibles en la galería.</p>
            </div>
        <?php endif; ?>
    </div>
</div>
<!-- Gallery End -->


<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Selecciona todas las imágenes dentro de .galeria-deportes
        var imagenes = document.querySelectorAll('.galeria-imagenes img');

        // Recorre todas las imágenes y ajusta su tamaño
        imagenes.forEach(function(imagen) {
            imagen.style.width = '300px';  // Cambia el ancho
            imagen.style.height = '200px'; // Cambia la altura
        });
    });
</script>