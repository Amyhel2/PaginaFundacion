<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{

    public function indexP()
    {

       if ($this->session->userdata('login')) {
        $data['nombreUsuario'] = $this->session->userdata('nombre'); // Obtén el nombre del usuario
        
        
        $this->load->view('vistaAdmin',$data);
        $this->load->view('indexP' ); // Pasa los datos a la vista
        $this->load->view('adminpie');
    } else {
        redirect('usuario/login'); // Redirige si no está logueado
    }
        
    }


	public function usuarios()
    {
    if ($this->session->userdata('login'))
    {
        // Obtener la lista de usuarios desde el modelo
        $lista = $this->usuario_model->listar_usuarios();
        $data['usuarios'] = $lista;

        // Cargar las vistas necesarias
        //$this->load->view('vistasIniciales/headPages');
        //$this->load->view('vistasIniciales/menu');
		$this->load->view('vistaAdmin');
        $this->load->view('usuario/lista', $data);
        $this->load->view('adminpie');
    }
    else
    {
        redirect('usuario/index', 'refresh');
    }
    }


    public function principal()
    {
       
        $this->load->view('vistaAdmin');
		$this->load->view('usuario/lista');
        $this->load->view('adminpie');
    }

    public function start()
    {
        $this->load->view('vistasIniciales/headPages');
        $this->load->view('vistasIniciales/principal');
        $this->load->view('vistasIniciales/footer');
    }

    public function about()
    {
        $this->load->view('vistasIniciales/headPages');
        $this->load->view('vistasIniciales/about');
        $this->load->view('vistasIniciales/footer');
    }

    public function contact()
    {
        $this->load->view('vistasIniciales/headPages');
        $this->load->view('vistasIniciales/contact');
        $this->load->view('vistasIniciales/footer');
    }

    public function donations()
    {
        $this->load->view('vistasIniciales/headPages');
        $this->load->view('vistasIniciales/donations');
        $this->load->view('vistasIniciales/footer');
    }

    public function education()
    {
        $this->load->view('vistasIniciales/headPages');
        $this->load->view('vistasIniciales/education');
        $this->load->view('vistasIniciales/footer');
    }

    public function gallery()
    {
        $data['archivos'] = $this->galeria_model->listar_archivos();
        $this->load->view('vistasIniciales/headPages');
        $this->load->view('vistasIniciales/gallery', $data);
        $this->load->view('vistasIniciales/footer');
    }

    public function news() {
        // Obtener todas las noticias desde el modelo
        $data['noticias'] = $this->noticia_model->listar_noticias();

        // Cargar las vistas y pasar los datos
        
        $this->load->view('vistasIniciales/headPages');
        $this->load->view('vistasIniciales/news',$data);
        $this->load->view('vistasIniciales/footer');
    }

    

    public function sports()
    {
        // Obtener todas las noticias desde el modelo
        $data['deportes'] = $this->deporte_model->listar_deportes();
        $data['partidos'] = $this->deporte_model->listar_partidos();
        $this->load->view('vistasIniciales/headPages');
        $this->load->view('vistasIniciales/sports', $data);
        $this->load->view('vistasIniciales/footer');
    }

    public function testimonials()
{

    // Obtener todos los testimonios desde el modelo
    $data['testimonios'] = $this->testimonio_model->listar_testimonios();

    // Cargar las vistas y pasar los datos
    $this->load->view('vistasIniciales/headPages');
    $this->load->view('vistasIniciales/testimonials', $data); // Asegúrate de que la vista está esperando los datos de 'testimonios'
    $this->load->view('vistasIniciales/footer');
}


    public function agregar()
    {
        $this->load->view('vistaAdmin');
        $this->load->view('usuario/forms/formulario');
        $this->load->view('adminpie');
    }

    public function agregarbd()
{
    // Recoger los datos del formulario y convertirlos a mayúsculas si es necesario
    $data = array(
        'nombre' => strtoupper($this->input->post('nombre')),
        'primerApellido' => strtoupper($this->input->post('apellido1')),
        'segundoApellido' => strtoupper($this->input->post('apellido2')),
        'email' => $this->input->post('email'),
        'telefono' => $this->input->post('telefono'),
        'direccion' => $this->input->post('direccion'),
        'fechaRegistro' => date('Y-m-d H:i:s'),
        'habilitado' => '1', // Por defecto, el usuario está habilitado
        'username' => $this->input->post('username'),
        'rol' => $this->input->post('rol') // Asumiendo que el rol también es un campo en el formulario
    );

    // Verificar que la contraseña no esté vacía antes de encriptarla
    $password = $this->input->post('contraseña');
    if (!empty($password)) {
        $data['contraseña'] = password_hash($password, PASSWORD_DEFAULT);
    } else {
        // Manejar el caso donde la contraseña no está disponible
        show_error('La contraseña es obligatoria.');
        return;
    }

    // Registrar el usuario en la base de datos
    $this->usuario_model->registrar($data);

    // Redirigir al usuario a la página principal
    redirect('usuario/usuarios', 'refresh');
}



    public function eliminarbd()
    {
        $idusuario = $this->input->post('idusuario');
        $this->usuario_model->eliminarusuario($idusuario);
        redirect('usuario/usuarios', 'refresh'); // Ruta corregida
    }

    public function modificar()
{
    $idusuario = $this->input->post('idusuario');
    $data['infousuario'] = $this->usuario_model->obtener_usuario($idusuario);

    $this->load->view('vistaAdmin');
    $this->load->view('usuario/forms/formmodificar', $data);
    $this->load->view('adminpie');
}


    public function deshabilitados()
    {
        $lista = $this->usuario_model->listadeshabilitados();
        $data['usuarios'] = $lista;
		$this->load->view('vistaAdmin');
        $this->load->view('usuario/forms/deshabilitados', $data);
        $this->load->view('adminpie');
    }

	public function modificarbd()
	{
		$idusuario = $this->input->post('idusuario');
		$data = array(
			'nombre' => strtoupper($this->input->post('nombre')),
			'primerApellido' => strtoupper($this->input->post('apellido1')),
			'segundoApellido' => strtoupper($this->input->post('apellido2')),
			'email' => $this->input->post('email'),  // Asegúrate de que el campo 'email' esté en la tabla
			'telefono' => $this->input->post('telefono'),  // Asegúrate de que el campo 'telefono' esté en la tabla
			'direccion' => $this->input->post('direccion')  // Asegúrate de que el campo 'direccion' esté en la tabla
		);
	
		$this->usuario_model->modificarusuario($idusuario, $data);
		redirect('usuario/usuarios', 'refresh'); // Ruta corregida
	}
	

    public function deshabilitarbd()
    {
        $idusuario = $this->input->post('idusuario');
        $data['habilitado'] = '0';
        $this->usuario_model->modificarusuario($idusuario, $data);
        redirect('usuario/usuarios', 'refresh'); // Ruta corregida
    }

    public function habilitarbd()
    {
        $idusuario = $this->input->post('idusuario');
        $data['habilitado'] = '1';
        $this->usuario_model->modificarusuario($idusuario, $data);
        redirect('usuario/deshabilitados', 'refresh');
    }

    public function perfil()
{
    if ($this->session->userdata('login')) {
        $idusuario = $this->session->userdata('idusuario');
        $data['usuario'] = $this->usuario_model->obtener_usuario($idusuario);

        $this->load->view('vistasIniciales/headPages');
        $this->load->view('usuario/perfilUsuario', $data);
        $this->load->view('vistasIniciales/footer');
    } else {
        redirect('usuario/index', 'refresh');
    }
}


public function registrar()
{
    $this->load->library('form_validation');

    $this->form_validation->set_rules('username', 'Nombre de Usuario', 'required|is_unique[usuario.username]');
    $this->form_validation->set_rules('nombre', 'Nombre', 'required');
    $this->form_validation->set_rules('primerApellido', 'Primer Apellido', 'required');
    $this->form_validation->set_rules('email', 'Correo electrónico', 'required|valid_email|is_unique[usuario.email]');
    $this->form_validation->set_rules('password', 'Contraseña', 'required|min_length[6]');
    $this->form_validation->set_rules('confirm_password', 'Confirmar Contraseña', 'required|matches[password]');
    $this->form_validation->set_rules('rol', 'Rol', 'required');

    if ($this->form_validation->run() == FALSE) {
        //$this->load->view('vistasIniciales/headPages');
        $this->load->view('usuario/forms/registro');
        //$this->load->view('vistasIniciales/footer');
    } else {
        $data = array(
            'username' => $this->input->post('username'),
            'nombre' => strtoupper($this->input->post('nombre')),
            'primerApellido' => strtoupper($this->input->post('primerApellido')),
            'segundoApellido' => strtoupper($this->input->post('segundoApellido')),
            'email' => $this->input->post('email'),
            'contraseña' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'telefono' => $this->input->post('telefono'),
            'direccion' => $this->input->post('direccion'),
            'habilitado' => 1,
            'rol' => $this->input->post('rol')  // Añadido para manejar el rol
        );

        $this->usuario_model->registrar($data);
        $this->session->set_flashdata('success', 'Registro exitoso. Ahora puedes iniciar sesión.');
        redirect('usuario/login', 'refresh');
    }
}

    public function login()
    {
        //$this->load->view('vistasIniciales/headPages');
        $this->load->view('usuario/forms/loginform');
        //$this->load->view('vistasIniciales/footer');
    }

    public function admin()
{
    // Comprobar si el usuario ha iniciado sesión y es administrador
    if ($this->session->userdata('login') && $this->session->userdata('rol') == 'admin') {
        //$this->load->view('vistasIniciales/headPages');
        $this->load->view('vistaAdmin');
        $this->load->view('adminpie');
    } else {
        // Si no es administrador o no ha iniciado sesión, redirigir a la página de inicio
        redirect('usuario/index', 'refresh');
    }
}

    public function index()
    {
        $this->load->view('usuario/forms/loginform');
    }

    public function administrador()
    {
        if ($this->session->userdata('login')) {
            $this->load->view('vistasIniciales/test');
        } else {
            redirect('usuario/index', 'refresh');
        }
    }

    public function usuario()
    {
        $this->load->view('usuario/perfilUsuario');
    }

    public function validarusuario()
{
    $login = $this->input->post('login');
    $password = $this->input->post('password');
    $usuario = $this->usuario_model->validar($login, $password);

    if ($usuario !== FALSE) {
        // Añadimos el rol a la sesión
        $this->session->set_userdata(array(
            'login' => TRUE,
            'idusuario' => $usuario->idUsuario,
            'username' => $usuario->username,
            'nombre' => $usuario->nombre,
            'primerApellido' => $usuario->primerApellido,
            'segundoApellido' => $usuario->segundoApellido,
            'rol' => $usuario->rol  // Añadir el rol a la sesión
        ));

        // Redirigir según el rol del usuario
        if ($usuario->rol == 'admin') {
            redirect('usuario/admin', 'refresh'); // Redirigir al panel de admin si es administrador
        } else {
            redirect('usuario/perfil', 'refresh'); // Redirigir al perfil si es usuario normal
        }
    } else {
        $this->session->set_flashdata('error', 'Usuario o contraseña incorrectos.');
        redirect('usuario/login', 'refresh');
    }
}


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('usuario/index', 'refresh');
    }




    // Método para mostrar la vista de configuración del usuario
    public function configuracion() {
        // Obtener información del usuario desde la sesión
        $userId = $this->session->userdata('idUsuario');  // Asegúrate de que 'idUsuario' esté en la sesión
        $data['usuario'] = $this->usuario_model->obtener_usuario_por_id($userId);

        // Cargar la vista de configuración con los datos del usuario
        $this->load->view('configUsuario', $data);
    }

    // Método para actualizar la contraseña del usuario
    public function cambiar_password() {
        $this->form_validation->set_rules('password_actual', 'Contraseña Actual', 'required');
        $this->form_validation->set_rules('password_nueva', 'Nueva Contraseña', 'required|min_length[6]');
        $this->form_validation->set_rules('confirmar_password', 'Confirmar Contraseña', 'required|matches[password_nueva]');

        if ($this->form_validation->run() == FALSE) {
            // Si la validación falla, recargar la vista con errores
            $this->configuracion();
        } else {
            // Obtener el ID del usuario de la sesión
            $userId = $this->session->userdata('idUsuario');
            $passwordActual = $this->input->post('password_actual');
            $passwordNueva = $this->input->post('password_nueva');

            // Verificar la contraseña actual
            if ($this->usuario_model->verificar_password($userId, $passwordActual)) {
                // Actualizar la nueva contraseña
                $this->usuario_model->actualizar_password($userId, password_hash($passwordNueva, PASSWORD_DEFAULT));
                $this->session->set_flashdata('mensaje', 'Contraseña actualizada correctamente.');
            } else {
                $this->session->set_flashdata('error', 'La contraseña actual no es correcta.');
            }
            redirect('usuario/configuracion');
        }
    }

    // Método para cerrar sesión
    public function cerrar_sesion() {
        $this->session->sess_destroy();  // Destruir toda la sesión
        redirect('login');
    }

    
    








}
