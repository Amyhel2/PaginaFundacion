<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Documentacion extends CI_Controller
{

	public function index(){
		
		
        $listalibros=$this->documentacion_model->listalibro();
			$data['libros']=$listalibros;

			
			$this->load->view('vistasIniciales/test',$data);
			$this->load->view('vistasIniciales/footer');
	}

    
	public function agregar()
	{
		
		$this->load->view('formsdoc/formulario');
		$this->load->view('vistasIniciales/footer');
		
	}
	public function agregarbd()
	{
		$data['titulo'] = strtoupper($_POST['titulo']);
		

		$this->documentacion_model->agregarlibro($data);
		redirect('documentacion/index', 'refresh'); // redirecciona un metodo 
	}
	public function eliminarbd()
	{
		$idlibro = $_POST['idlibro'];
		$this->documentacion_model->eliminarlibro($idlibro);
		redirect('documentacion/index', 'refresh');// hacer con javascript de un alert si estamos seguros o no
	}
	public function modificar()
	{
		$idlibro = $_POST['idlibro'];
		$data['infolibro'] = $this->documentacion_model->recuperarlibro($idlibro);

		
		$this->load->view('formsdoc/formmodificar', $data);
		$this->load->view('vistasIniciales/footer');
		

	}
	public function deshabilitados()
	{
		$listalibros = $this->documentacion_model->listadeshabilitados();
		$data['libros'] = $listalibros;
		
		
		$this->load->view('formsdoc/deshabilitados', $data);
		$this->load->view('vistasIniciales/footer');
		

	}
	public function modificarbd()
	{
		$idlibro = $_POST['idlibro'];
		$data['titulo'] = strtoupper($_POST['titulo']);
		
		$this->documentacion_model->modificarlibro($idlibro, $data);
		redirect('documentacion/index', 'refresh');
	}
	public function deshabilitarbd()
	{
		$idlibro = $_POST['idlibro'];
		$data['habilitado'] = '0';
		$this->documentacion_model->modificarlibro($idlibro, $data);
		redirect('documentacion/index', 'refresh');
	}
	public function habilitarbd()
	{
		$idlibro = $_POST['idlibro'];
		$data['habilitado'] = '1';
		$this->documentacion_model->modificarlibro($idlibro, $data);
		redirect('documentacion/deshabilitados', 'refresh');
	}

	
}