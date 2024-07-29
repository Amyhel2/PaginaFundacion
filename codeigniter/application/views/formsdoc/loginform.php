<head>
    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">
	
</head>
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center">Iniciar de sesión</h1>
            <?php echo form_open_multipart("usuarios/validarusuario"); ?>
                <div class="form-group">
                    <input type="text" class="form-control" name="login" placeholder="Escribe login" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Escribe password" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Ingresar</button>
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>