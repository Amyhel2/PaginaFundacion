<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fundacion Multidiciplinaria Promesa 705</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->

    <link href="img/logo fundacion.jpg " rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">
</head>

<body>

     <!-- Navbar Start -->
     <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <div id="logo">
                <h1><a  href="<?php echo base_url() ?>index.php/estudiante/principal">Promesa<span>Fundación 705 </span></a></h1>
            </div>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="<?php echo base_url() ?>index.php/estudiante/principal" class="nav-item nav-link active">Inicio</a>
                    <a href="<?php echo base_url() ?>index.php/estudiante/about" class="nav-item nav-link">Acerca de</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Programas</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="<?php echo base_url() ?>index.php/estudiante/education" class="dropdown-item">Educación y Capacitación</a>
                            <a href="<?php echo base_url() ?>index.php/estudiante/sports" class="dropdown-item">Actividades deportivas</a>
                        </div>
                    </div>
                    <a href="<?php echo base_url() ?>index.php/estudiante/news" class="nav-item nav-link">Noticias</a>
                    <a href="<?php echo base_url() ?>index.php/estudiante/donations" class="nav-item nav-link">Donaciones</a>
                    <a href="<?php echo base_url() ?>index.php/estudiante/gallery" class="nav-item nav-link">Galería</a>
                    <a href="<?php echo base_url() ?>index.php/estudiante/testimonials" class="nav-item nav-link">Testimonios</a>
                    <a href="<?php echo base_url() ?>index.php/estudiante/contact" class="nav-item nav-link">Contáctenos</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?php echo base_url() ?>img/car1.webp" alt="Image">
                    <div class="carousel-caption d-flex flex-column ">
                        <!-- Banner Start 
                        <div class="main-banner">
                            <div class="container">
                                <div>
                                    <h4>Un Futuro Mejor para Todos</h4>
                                    <h5>Construyendo un mundo más justo y equitativo</h5>
                                </div>
                                <div class="two-demo-button ">
                                    <p>En Fundación Promesa, trabajamos incansablemente para brindar oportunidades
                                        educativas y
                                        recreativas a las comunidades más necesitadas. Creemos en el poder de la
                                        educación y el deporte
                                        para transformar vidas y crear un futuro prometedor.</p>
                                </div>
                                <div class="view-buttn ">
                                    <a href="about.html" class="btn scroll">Acerca de Nosotros</a>
                                </div>
                            </div>
                        </div>
                         Banner End -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?php echo base_url() ?>img/car2.webp" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">

                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?php echo base_url() ?>img/car3.webp" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">

                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

    </div>
    <!-- Carousel End -->
