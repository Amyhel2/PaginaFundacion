<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PROYECTO 705</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/logo fundacion.jpg" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">
</head>

<body>
   <!-- Header Start -->
   <header class="bg-secondary text-white">
       <div class="container">
           <div class="row align-items-center py-3">
               <div class="col-md-6">
                   <h1><a class="text-white" href="<?php echo base_url() ?>index.php/usuario/start">Promesa <span>Fundación 705</span></a></h1>
               </div>
               <div class="col-md-6 text-md-right">
                   <a href="<?php echo base_url() ?>index.php/usuario/login" class="btn btn-light mr-2">Iniciar sesión</a>
                   <a href="<?php echo base_url() ?>index.php/usuario/registrar" class="btn btn-light">Registrarse</a>
               </div>
           </div>
       </div>
   </header>
   <!-- Header End -->

   <!-- Navbar Start -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <div class="container">
           <a class="navbar-brand" href="<?php echo base_url() ?>index.php/usuario/start">Inicio</a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ml-auto">
                   <li class="nav-item">
                       <a class="nav-link" href="<?php echo base_url() ?>index.php/usuario/about">Acerca de</a>
                   </li>
                   <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Programas
                       </a>
                       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="<?php echo base_url() ?>index.php/usuario/education">Educación y Capacitación</a>
                           <a class="dropdown-item" href="<?php echo base_url() ?>index.php/usuario/sports">Actividades deportivas</a>
                       </div>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="<?php echo base_url() ?>index.php/usuario/news">Noticias</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="<?php echo base_url() ?>index.php/usuario/donations">Donaciones</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="<?php echo base_url() ?>index.php/usuario/gallery">Galería</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="<?php echo base_url() ?>index.php/usuario/testimonials">Testimonios</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="<?php echo base_url() ?>index.php/usuario/contact">Contáctenos</a>
                   </li>
               </ul>
           </div>
       </div>
   </nav>
   <!-- Navbar End -->

   
