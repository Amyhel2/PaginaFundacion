 <!-- Customized Bootstrap Stylesheet -->
 <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
		  <h1>Lista de documentos</h1>
		  <?php
echo date('Y/m/d H:i:s');
?>
<br>
<a href="<?php echo base_url() ?>index.php/documentacion/agregar">
	<button type="button" class="btn btn-primary">Agregar libro</button>
</a>
<br>
<hr>
<a href="<?php echo base_url() ?>index.php/documentacion/deshabilitados">
	<button type="button" class="btn btn-primary">Ver deshabilitados</button>
</a>
<br>
<br>


                <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>No.</th>
		            <th>titulo</th>
		            
		            <th>Modificar</th>
		            <th>Eliminar</th>
		            <th>Deshabilitar</th>

                    </tr>
		
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
					echo form_open_multipart("documentacion/modificar");
					?>
					<input type="hidden" name="idlibro" value="<?php echo $row->idLibro; ?>">
					<button type="submit" class="btn btn-success">Modificar</button>
					<?php
					echo form_close();
					?>
				</td>
				<td>
					<?php
					echo form_open_multipart("documentacion/eliminarbd");
					?>
					<input type="hidden" name="idlibro" value="<?php echo $row->idLibro; ?>">
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<?php
					echo form_close();
					?>
				</td>
				<td>
					<?php
					echo form_open_multipart("documentacion/deshabilitarbd");
					?>
					<input type="hidden" name="idlibro" value="<?php echo $row->idLibro; ?>">
					<button type="submit" class="btn btn-primary">Deshabilitar</button>
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
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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

    <!-- Main content -->

			  

