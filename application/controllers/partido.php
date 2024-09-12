<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Partido extends CI_Controller
{
	
	public function agregar() {
		$data = array(
			'equipo_local' => $this->input->post('equipo_local'),
			'equipo_visitante' => $this->input->post('equipo_visitante'),
			'fecha_partido' => $this->input->post('fecha_partido'),
			'hora_partido' => $this->input->post('hora_partido'),
			'ubicacion' => $this->input->post('ubicacion')
		);
	
		$this->Partido_model->insertar_partido($data);
		redirect('partido/lista'); // Redirige a la lista de partidos
	}
	
	public function lista() {
		// Cargar todos los partidos desde la base de datos
		$data['partidos'] = $this->Partido_model->obtener_todos_los_partidos();
	
		// Cargar la vista y pasar los datos de los partidos
		$this->load->view('vistasIniciales/sports', $data);
	}
	
	
}

