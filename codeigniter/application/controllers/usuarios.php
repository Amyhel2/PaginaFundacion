<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios extends CI_Controller
{

	public function index(){
		
		//$this->load->view('inc/vistasPages/headPages');
		$this->load->view('forms/loginform');
		$this->load->view('vistasIniciales/footer');
	}

	
	public function administrador(){
		$this->load->view('vistaAdmin');
	}

	public function validarusuario()
	{
		$login=$_POST['login'];
		$password=sha1($_POST['password']);

		echo $login;
		echo $password;
		$consulta=$this->usuario_model->validar($login,$password);

		echo $consulta->num_rows();

		if($consulta->num_rows()>0)
		{
			echo 'inicio de sesion';
			//usuario valido
			foreach($consulta->result() as $row)
			{

				$this->session->set_userdata('idusuario',$row->idUsuario);
				$this->session->set_userdata('login',$row->login);
				$this->session->set_userdata('tipo',$row->tipo);

				redirect('usuarios/panel','refresh');
			}
		}
		else
		{
			//acceso incorrecto - volvemos al login
			redirect('usuarios/index','refresh');
		}
	}

	public function panel()
	{
		if($this->session->userdata('login'))
		{
			redirect('estudiante/principal','refresh');
		}
		else
		{
			redirect('usuarios/index','refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('usuarios/index','refresh');
	}

}