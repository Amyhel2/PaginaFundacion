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
foreach($infoestudiante->result() as $row){
?>
<?php 
	echo form_open_multipart("estudiante/modificarbd");
?>
	<input type="hidden" name="idestudiante" value="<?php echo $row->IdEstudiante ; ?>">
	<input type="text" class="form-control" name="nombre" placeholder="Escribe nombre" value="<?php echo $row->nombre; ?>" required>
	<input type="text" class="form-control" name="apellido1" placeholder="Escribe Apellido Paterno" value="<?php echo $row->primerApellido; ?>" required>
	<input type="text" class="form-control" name="apellido2" placeholder="Escribe Apellido Materno" value="<?php echo $row->segundoApellido; ?>"required>
	<input type="number" min="0" max="100" class="form-control" name="nota" placeholder="Escribe su Nota" value="<?php echo $row->nota; ?>" required>
	<button type="submit"  class="btn btn-success">Modificar estudiante</button>
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





