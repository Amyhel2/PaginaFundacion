<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Deporte extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('login')) {
            // Obtener la lista de deportes desde el modelo
            $data['deportes'] = $this->deporte_model->listar_deportes();

            // Cargar las vistas
            $this->load->view('vistaAdmin');
            $this->load->view('deporte/lista', $data);
            $this->load->view('adminpie');
        } else {
            redirect('usuario/login', 'refresh');
        }
    }

    public function agregar()
    {
        if ($this->session->userdata('login')) {
            $this->load->view('vistaAdmin');
            $this->load->view('deporte/formsDeporte/formulario');
            $this->load->view('adminpie');
        } else {
            redirect('usuario/login', 'refresh');
        }
    }

    public function agregarbd()
    {
        $data = array(
            'deporte' => $this->input->post('deporte'),
            'equipo_local' => $this->input->post('equipo_local'),
            'equipo_visitante' => $this->input->post('equipo_visitante'),
            'fecha' => $this->input->post('fecha'),
            'lugar' => $this->input->post('lugar'),
            'resultado_local' => $this->input->post('resultado_local'),
            'resultado_visitante' => $this->input->post('resultado_visitante'),
            'estado' => $this->input->post('estado'),
            'descripcion' => $this->input->post('descripcion'),
            'creado_por' => $this->session->userdata('user_id')
        );

        $this->deporte_model->registrar($data);
        redirect('deporte/index', 'refresh');
    }

    public function modificar($id)
    {
        if ($this->session->userdata('login')) {
            $data['deporte'] = $this->deporte_model->obtener_deporte($id);

            $this->load->view('vistaAdmin');
            $this->load->view('deporte/formsDeporte/formmodificar', $data);
            $this->load->view('adminpie');
        } else {
            redirect('usuario/login', 'refresh');
        }
    }

    public function modificarbd()
    {
        $id = $this->input->post('id');
        $data = array(
            'deporte' => $this->input->post('deporte'),
            'equipo_local' => $this->input->post('equipo_local'),
            'equipo_visitante' => $this->input->post('equipo_visitante'),
            'fecha' => $this->input->post('fecha'),
            'lugar' => $this->input->post('lugar'),
            'resultado_local' => $this->input->post('resultado_local'),
            'resultado_visitante' => $this->input->post('resultado_visitante'),
            'estado' => $this->input->post('estado'),
            'descripcion' => $this->input->post('descripcion')
        );

        $this->deporte_model->modificar_deporte($id, $data);
        redirect('deporte/index', 'refresh');
    }

    public function eliminarbd()
    {
        $id = $this->input->post('id');
        $this->deporte_model->eliminar_deporte($id);
        redirect('deporte/index', 'refresh');
    }
}
