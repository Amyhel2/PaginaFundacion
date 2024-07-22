 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
		  <h1>Lista de estudiantes</h1>
		  <?php
echo date('Y/m/d H:i:s');
?>
<br>
<a href="<?php echo base_url() ?>index.php/estudiante/agregar">
	<button type="button" class="btn btn-primary">Agregar estudiante</button>
</a>
<br>
<hr>
<a href="<?php echo base_url() ?>index.php/estudiante/deshabilitados">
	<button type="button" class="btn btn-primary">Ver deshabilitados</button>
</a>
<br>
<br>


                <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>No.</th>
		            <th>Nombre</th>
		            <th>Primer Apellido</th>
		            <th>Segundo Apellido</th>
		            <th>Nota</th>
					<th>Creado</th>
		            <th>Modificar</th>
		            <th>Eliminar</th>
		            <th>Deshabilitar</th>

                    </tr>
		
	            </thead>
	<tbody>
		<?php
		$con = 1;
		foreach ($alumnos->result() as $row) {
			?>
			<tr>
				<td><?php echo $con; ?></td>
				<td><?php echo $row->nombre; ?></td>
				<td><?php echo $row->primerApellido; ?></td>
				<td><?php echo $row->segundoApellido; ?></td>
				<td><?php echo $row->nota; ?>
				<?php echo estado($row->nota);?>
				</td>
				<td><?php echo formatearFecha($row->creado); ?></td>
				<td>
					<?php
					echo form_open_multipart("estudiante/modificar");
					?>
					<input type="hidden" name="idestudiante" value="<?php echo $row->IdEstudiante; ?>">
					<button type="submit" class="btn btn-success">Modificar</button>
					<?php
					echo form_close();
					?>
				</td>
				<td>
					<?php
					echo form_open_multipart("estudiante/eliminarbd");
					?>
					<input type="hidden" name="idestudiante" value="<?php echo $row->IdEstudiante; ?>">
					<button type="submit" class="btn btn-danger">Eliminar</button>
					<?php
					echo form_close();
					?>
				</td>
				<td>
					<?php
					echo form_open_multipart("estudiante/deshabilitarbd");
					?>
					<input type="hidden" name="idestudiante" value="<?php echo $row->IdEstudiante; ?>">
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

			  

