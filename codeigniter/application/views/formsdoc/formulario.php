
 <!-- Customized Bootstrap Stylesheet -->
<link href="<?php echo base_url() ?>css/style.css" rel="stylesheet"> 
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
<h1>Agregar libro</h1>
<br>
<?php 
	echo form_open_multipart("documentacion/agregarbd");
?>
	<input type="text" class="form-control" name="titulo" placeholder="Escribe el titulo del libro" required>
	
	
	<button type="submit"  class="btn btn-success">Agregar</button>
<?php
	echo form_close();
?>




