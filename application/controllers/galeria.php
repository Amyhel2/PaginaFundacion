<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        // Cargar la librería de subida de archivos
        $this->load->library('upload');
    }

    public function index()
    {
        // Obtener la lista de archivos de la galería desde el modelo
        $data['archivos'] = $this->galeria_model->listar_archivos();

        // Cargar las vistas y pasar los datos
        $this->load->view('vistaAdmin');
        $this->load->view('galeria/lista', $data);
        $this->load->view('adminpie');
    }

    

    public function agregar()
    {
        $this->load->view('vistaAdmin');
        $this->load->view('galeria/formsGaleria/formulario');
        $this->load->view('adminpie');
    }

    public function agregarbd()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg|gif|mp4|avi|mov';
        $config['max_size'] = 10240; // 10MB máximo

        $this->upload->initialize($config); // Inicializar la biblioteca de subida

        if (!$this->upload->do_upload('archivo')) {
            // Manejar error de subida
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', $error);
            redirect('galeria/agregar');
        } else {
            // Obtener información del archivo subido
            $data = $this->upload->data();
            $ruta_archivo = $data['file_name']; // Nombre del archivo subido

            // Recoger los demás datos del formulario
            $tipo = $this->input->post('tipo');
            $titulo = $this->input->post('titulo');
            $descripcion = $this->input->post('descripcion');

            // Crear un array con los datos para insertar en la base de datos
            $data = array(
                'tipo' => $tipo,
                'titulo' => $titulo,
                'descripcion' => $descripcion,
                'ruta_archivo' => $ruta_archivo,
                'subido_por' => $this->session->userdata('idUsuario'), // Asume que tienes la sesión de usuario
                'fechaSubida' => date('Y-m-d H:i:s')
            );

            // Insertar en la base de datos
            $this->galeria_model->registrar($data);

            // Redirigir o mostrar mensaje de éxito
            $this->session->set_flashdata('success', 'Archivo subido exitosamente.');
            redirect('galeria/index');
        }
    }

    public function modificar($id)
{
    // Cambia 'archivo' a 'galeria' para que coincida con la vista
    $data['galeria'] = $this->galeria_model->obtener_archivo($id);

    $this->load->view('vistaAdmin');
    $this->load->view('galeria/formsGaleria/formmodificar', $data);
    $this->load->view('adminpie');
}


public function modificarbd()
{
    $id = $this->input->post('id');
    $archivo_actual = $this->input->post('archivo_actual');
    
    // Cargar la librería de subida de archivos
    $this->load->library('upload'); // Esta línea carga la librería

    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'jpg|png|jpeg|gif|mp4|avi|mov';
    $config['max_size'] = 10240; // 10MB máximo

    $this->upload->initialize($config); // Inicializar la configuración de subida

    // Intentar subir un nuevo archivo si se ha seleccionado uno
    if (!empty($_FILES['archivo']['name'])) {
        if (!$this->upload->do_upload('archivo')) {
            // Manejar error de subida
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', $error);
            redirect("galeria/modificar/$id");
            return;
        } else {
            // Subida exitosa, reemplazar archivo actual
            $upload_data = $this->upload->data();
            $ruta_archivo = $upload_data['file_name'];
        }
    } else {
        // Mantener la ruta del archivo actual
        $ruta_archivo = $archivo_actual;
    }

    // Recoger los demás datos del formulario
    $tipo = $this->input->post('tipo');
    $titulo = $this->input->post('titulo');
    $descripcion = $this->input->post('descripcion');

    // Crear un array con los datos para actualizar en la base de datos
    $update_data = array(
        'tipo' => $tipo,
        'titulo' => $titulo,
        'descripcion' => $descripcion,
        'ruta_archivo' => $ruta_archivo,
        'fechaActualizacion' => date('Y-m-d H:i:s')
    );

    // Actualizar en la base de datos
    $this->galeria_model->modificar_archivo($id, $update_data);

    // Redirigir o mostrar mensaje de éxito
    $this->session->set_flashdata('success', 'Archivo actualizado exitosamente.');
    redirect('galeria/index');
}

    public function eliminarbd()
    {
        $id = $this->input->post('id');
        $this->galeria_model->eliminar_archivo($id);
        $this->session->set_flashdata('success', 'Archivo eliminado exitosamente.');
        redirect('galeria/index');
    }


    
}
