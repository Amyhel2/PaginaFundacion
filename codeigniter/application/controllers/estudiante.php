<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Estudiante extends CI_Controller
{
	
	public function principal()
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
		$this->load->view('vistasIniciales/headPages');
		$this->load->view('vistasIniciales/gallery');
		$this->load->view('vistasIniciales/footer');
		
	}

	public function news()
	{
		$this->load->view('vistasIniciales/headPages');
		$this->load->view('vistasIniciales/news');
		$this->load->view('vistasIniciales/footer');
		
	}

	public function sports()
	{
		$this->load->view('vistasIniciales/headPages');
		$this->load->view('vistasIniciales/sports');
		$this->load->view('vistasIniciales/footer');
		
	}

	public function testimonials()
	{
		$this->load->view('vistasIniciales/headPages');
		$this->load->view('vistasIniciales/testimonials');
		$this->load->view('vistasIniciales/footer');
		
	}

	public function agregar()
	{
		$this->load->view('vistasIniciales/head');
		$this->load->view('forms/formulario');
		$this->load->view('vistasIniciales/footer');
		
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

		$this->load->view('vistasIniciales/head');
		$this->load->view('forms/formmodificar', $data);
		$this->load->view('vistasIniciales/footer');
		

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

