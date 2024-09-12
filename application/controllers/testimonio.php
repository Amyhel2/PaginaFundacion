<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimonio extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('login')) {
            // Obtener la lista de testimonios desde el modelo
            $lista = $this->testimonio_model->listar_testimonios();
            $data['testimonios'] = $lista;

            $this->load->view('vistaAdmin');
            $this->load->view('testimonio/lista', $data);
            $this->load->view('adminpie');
        } else {
            redirect('testimonio/index', 'refresh');
        }
    }

    public function agregar()
    {
        $this->load->view('vistaAdmin');
        $this->load->view('testimonio/formsTestimonio/formulario');
        $this->load->view('adminpie');
    }

    public function agregarbd()
    {
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'cargo' => $this->input->post('cargo'),
            'testimonio' => $this->input->post('testimonio')
        );

        $this->testimonio_model->registrar($data);
        redirect('testimonio/index', 'refresh');
    }

    public function modificar($id)
    {
        $data['testimonio'] = $this->testimonio_model->obtener_testimonio($id);

        $this->load->view('vistaAdmin');
        $this->load->view('testimonio/formsTestimonio/formmodificar', $data);
        $this->load->view('adminpie');
    }

    public function modificarbd()
    {
        $id = $this->input->post('id');
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'cargo' => $this->input->post('cargo'),
            'testimonio' => $this->input->post('testimonio')
        );

        $this->testimonio_model->modificar_testimonio($id, $data);
        redirect('testimonio/index', 'refresh');
    }

    public function eliminarbd()
    {
        $id = $this->input->post('id');
        $this->testimonio_model->eliminar_testimonio($id);
        redirect('testimonio/index', 'refresh');
    }
}
