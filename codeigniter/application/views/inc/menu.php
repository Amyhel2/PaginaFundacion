<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">WEB 3</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=" <?php echo base_url(); ?>index.php/empresa/index">Inicio</a>

          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=" <?php echo base_url(); ?>index.php/empresa/catalogo">Catalogo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=" <?php echo base_url(); ?>index.php/empresa/contactos">Contactos</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>