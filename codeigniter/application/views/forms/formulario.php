
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
 </div><!-- /.container-fluid -->
<h1>Agregar estudiante</h1>
<br>
<?php 
	echo form_open_multipart("estudiante/agregarbd");
?>
	<input type="text" class="form-control" name="nombre" placeholder="Escribe nombre" required>
	<input type="text" class="form-control" name="apellido1" placeholder="Escribe Apellido Paterno" required>
	<input type="text" class="form-control" name="apellido2" placeholder="Escribe Apellido Materno" required>
	<input type="number" min="0" max="100" class="form-control" name="nota" placeholder="Escribe su Nota" required>
	
	<button type="submit"  class="btn btn-success">Agregar estudiante</button>
<?php
	echo form_close();
?>




