<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 position-relative ">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Testimonios</h1>
        <div class="d-inline-flex mb-lg-5">
            <p class="m-0 text-white"><a class="text-white" href="<?php echo base_url() ?>index.php/usuario/start">Inicio</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Testimonios</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Testimonials Start -->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="section-title text-center position-relative mb-4">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Lo que dicen de nosotros</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <?php if (isset($testimonios) && !empty($testimonios)) : ?>
            <?php foreach ($testimonios as $testimonio) : ?>
                <div class="col-lg-6 mb-4">
                    <div class="testimonial-item bg-light text-center p-4">
                        <!-- Si tienes imágenes de testimonios, puedes agregar un campo para URL de la imagen en tu base de datos -->
                        <img class="rounded-circle mb-3" src="img/testimonial-placeholder.jpg" alt="">
                        <h5><?php echo $testimonio->nombre; ?></h5>
                        <p><i><?php echo $testimonio->cargo; ?></i></p>
                        <p><?php echo $testimonio->testimonio; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="col-12">
                <p class="text-center">No hay testimonios disponibles.</p>
            </div>
        <?php endif; ?>
    </div>
</div>
<!-- Testimonials End -->

<!-- Call to Action Start -->
<div class="container-fluid bg-secondary py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <h1 class="display-4 text-white">Comparte tu historia</h1>
                <p class="text-white">Si has sido parte de Proyecto Promesa y quieres compartir tu experiencia, contáctanos. ¡Nos encantaría escuchar tu historia!</p>
                <a href="contact.html" class="btn btn-primary mt-3 py-2 px-4">Contáctanos</a>
            </div>
        </div>
    </div>
</div>
<!-- Call to Action End -->
