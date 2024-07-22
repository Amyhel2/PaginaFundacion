<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Estudiante extends CI_Controller
{
	

	/*public function demo(){
		
		$lista = $this->estudiante_model->listaestudiantes();
		$data['alumnos'] = $lista;
		$this->load->view('inc/vistaslte/head');
		$this->load->view('inc/vistaslte/menu');
		$this->load->view('inc/vistaslte/test',$data);
		$this->load->view('inc/vistaslte/footer');
		
		
	}*/

	public function curso()
	{
		$lista = $this->estudiante_model->listaestudiantes();
		$data['alumnos'] = $lista;
		$this->load->view('inc/vistaslte/head');
		$this->load->view('inc/vistaslte/menu');
		$this->load->view('inc/vistaslte/test', $data);
		//$this->load->view('lista', $data);
		$this->load->view('inc/vistaslte/footer');
		
	}
	public function agregar()
	{
		$this->load->view('inc/vistaslte/head');
		$this->load->view('inc/vistaslte/menu');
		$this->load->view('formulario');
		$this->load->view('inc/vistaslte/footer');
		
	}
	public function agregarbd()
	{
		$data['nombre'] = strtoupper($_POST['nombre']);
		$data['primerApellido'] = strtoupper($_POST['apellido1']);
		$data['segundoApellido'] = strtoupper($_POST['apellido2']);
		$data['nota'] = $_POST['nota'];

		$this->estudiante_model->agregarestudiante($data);
		redirect('estudiante/curso', 'refresh'); // redirecciona un metodo 
	}
	public function eliminarbd()
	{
		$idestudiante = $_POST['idestudiante'];
		$this->estudiante_model->eliminarestudiante($idestudiante);
		redirect('estudiante/curso', 'refresh');// hacer con javascript de un alert si estamos seguros o no
	}
	public function modificar()
	{
		$idestudiante = $_POST['idestudiante'];
		$data['infoestudiante'] = $this->estudiante_model->recuperarestudiante($idestudiante);

		$this->load->view('inc/vistaslte/head');
		$this->load->view('inc/vistaslte/menu');
		$this->load->view('formmodificar', $data);
		$this->load->view('inc/vistaslte/footer');
		

	}
	public function deshabilitados()
	{
		$lista = $this->estudiante_model->listadeshabilitados();
		$data['alumnos'] = $lista;
		$this->load->view('inc/vistaslte/head');
		$this->load->view('inc/vistaslte/menu');
		$this->load->view('deshabilitados', $data);
		$this->load->view('inc/vistaslte/footer');
		

	}
	public function modificarbd()
	{
		$idestudiante = $_POST['idestudiante'];
		$data['nombre'] = strtoupper($_POST['nombre']);
		$data['primerApellido'] = strtoupper($_POST['apellido1']);
		$data['segundoApellido'] = strtoupper($_POST['apellido2']);
		$data['nota'] = $_POST['nota'];
		$this->estudiante_model->modificarestudiante($idestudiante, $data);
		redirect('estudiante/curso', 'refresh');
	}
	public function deshabilitarbd()
	{
		$idestudiante = $_POST['idestudiante'];
		$data['habilitado'] = '0';
		$this->estudiante_model->modificarestudiante($idestudiante, $data);
		redirect('estudiante/curso', 'refresh');
	}
	public function habilitarbd()
	{
		$idestudiante = $_POST['idestudiante'];
		$data['habilitado'] = '1';
		$this->estudiante_model->modificarestudiante($idestudiante, $data);
		redirect('estudiante/deshabilitados', 'refresh');
	}
}

