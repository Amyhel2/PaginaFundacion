<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 position-relative">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Noticias</h1>
        <div class="d-inline-flex mb-lg-5">
            <p class="m-0 text-white"><a class="text-white" href="<?php echo base_url() ?>index.php/usuario/start">Inicio</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Noticias</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- News Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Mantente Informado</h4>
        </div>
        <div class="row">
            <?php if (isset($noticias) && !empty($noticias)) : ?>
                <?php foreach ($noticias as $noticia) : ?>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-content">
                                <h4 class="text-primary"><?php echo $noticia->titulo; ?></h4>
                                <p><?php echo $noticia->contenido; ?></p>
                                <p class="text-muted"><?php echo date('d M Y', strtotime($noticia->fechaPublicacion)); ?></p>
                                <a href="<?php echo base_url('index.php/noticias/detalle/' . $noticia->id); ?>" class="btn btn-primary mt-3">Leer Más</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p>No hay noticias disponibles en este momento.</p>
            <?php endif; ?>
        </div>
    </div>
</div>    
<!-- News End -->

