 <!-- Customized Bootstrap Stylesheet -->
 <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
		  <h1>Lista de Deshabilitados</h1>
<br>

<hr>
<a href="<?php echo base_url() ?>index.php/documentacion/inicio">
	<button type="button" class="btn btn-secondary">Ver habilitados</button>
	
</a>
<br>
<table id="example1" class="table table-bordered table-striped">
	<thead>
		<th>No.</th>
		<th>Titulo</th>
		
		<th>Habilitar</th>
	</thead>
	<tbody>
		<?php
		$con = 1;
		foreach ($libros->result() as $row) {
			?>
			<tr>
				<td><?php echo $con; ?></td>
				<td><?php echo $row->titulo; ?></td>
				
				<td>
					<?php
					echo form_open_multipart("documentacion/habilitarbd");
					?>
					<input type="hidden" name="idlibro" value="<?php echo $row->idLibro; ?>">
					<button type="submit" class="btn btn-primary">Habilitar</button>
					<?php
					echo form_close();
					?>
				</td>
			</tr>
			<?php
			$con++;
		}
		?>
	</tbody>
</table>

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
