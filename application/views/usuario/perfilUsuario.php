<header>
        <h1>Perfil del Usuario</h1>
    </header>
    <main>
        <h2>Información del Usuario</h2>
        <p><strong>Nombre:</strong> <?php echo $usuario->nombre; ?></p>
        <p><strong>Primer Apellido:</strong> <?php echo $usuario->primerApellido; ?></p>
        <p><strong>Segundo Apellido:</strong> <?php echo $usuario->segundoApellido; ?></p>
        <p><strong>Email:</strong> <?php echo $usuario->email; ?></p>
        <p><strong>Teléfono:</strong> <?php echo $usuario->telefono; ?></p>
        <p><strong>Dirección:</strong> <?php echo $usuario->direccion; ?></p>
        <!-- Agrega más información según sea necesario -->
    </main>