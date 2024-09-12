<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Noticia extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('login')) {
            // Obtener la lista de noticias desde el modelo
            $lista = $this->noticia_model->listar_noticias();
            $data['noticias'] = $lista;

            $this->load->view('vistaAdmin');
            $this->load->view('noticia/lista', $data);
            $this->load->view('adminpie');
        } else {
            redirect('noticia/index', 'refresh');
        }
    }

    public function agregar()
    {
        $this->load->view('vistaAdmin');
        $this->load->view('noticia/formsNoticias/formulario');
        $this->load->view('adminpie');
    }

    public function agregarbd()
    {
        $data = array(
            'titulo' => $this->input->post('titulo'),
            'contenido' => $this->input->post('contenido'),
            'fechaPublicacion' => $this->input->post('fechaPublicacion') // Ajusta según el nombre del campo en tu formulario
        );

        $this->noticia_model->registrar($data);
        redirect('noticia/index', 'refresh');
    }

    public function modificar($id)
    {
        $data['noticia'] = $this->noticia_model->obtener_noticias($id);

        // Manejo de error si la noticia no existe
        if (!$data['noticia']) {
            show_404();  // Muestra un error 404 si no se encuentra la noticia
        }

        $this->load->view('vistaAdmin');
        $this->load->view('noticia/formsNoticias/formmodificar', $data);
        $this->load->view('adminpie');
    }

    public function modificarbd()
    {
        // Obtener el ID de la noticia desde el formulario
        $id = $this->input->post('id'); // Asegúrate de que el campo en el formulario sea 'id'
        
        $data = array(
            'titulo' => $this->input->post('titulo'),
            'contenido' => $this->input->post('contenido')
        );

        // Actualizar la noticia en la base de datos
        $this->noticia_model->modificar_noticia($id, $data);
        redirect('noticia/index', 'refresh');
    }

    public function eliminarbd()
    {
        // Obtener el ID de la noticia desde el formulario
        $id = $this->input->post('id');
        
        // Eliminar la noticia de la base de datos
        $this->noticia_model->eliminar_noticia($id);
        redirect('noticia/index', 'refresh');
    }
}

