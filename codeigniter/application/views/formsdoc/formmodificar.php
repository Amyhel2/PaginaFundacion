 <!-- Customized Bootstrap Stylesheet -->
<link href="<?php echo base_url() ?>css/style.css" rel="stylesheet"> 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
		  <h1>Modificar estudiante</h1>
<br>
<?php 
foreach($infolibro->result() as $row){
?>
<?php 
	echo form_open_multipart("documentacion/modificarbd");
?>
	<input type="hidden" name="idlibro" value="<?php echo $row->idLibro ; ?>">
	<input type="text" class="form-control" name="titulo" placeholder="Escribe el titulo del documento" value="<?php echo $row->titulo; ?>" required>
	
	<button type="submit"  class="btn btn-success">Guardar cambios</button>
<?php
	echo form_close();
}
?>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
 </div><!-- /.container-fluid -->
    </section>
<br><br>





