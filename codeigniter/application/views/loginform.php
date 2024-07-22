
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

<br>
<h1>Ingreso de usuarios</h1>
<br>

<?php 
	echo form_open_multipart("usuarios/validarusuario");
?>
	<input type="text" class="form-control" name="login" placeholder="Escribe login" required>
	<input type="password" class="form-control" name="password" placeholder="Escribe password" required>
	<button type="submit"  class="btn btn-success">Ingresar</button>
<?php
	echo form_close();
?>




