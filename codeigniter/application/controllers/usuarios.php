<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios extends CI_Controller
{

	public function index(){
		
		$this->load->view('inc/vistaslte/head');
		$this->load->view('loginform');
		$this->load->view('inc/vistaslte/footer');
	}

	public function validarusuario(){
		
		$login = $_POST['login'];
		$password = md5($_POST['password']);
		$consulta = $this->usuario_model->validar($login, $password);
		if($consulta->num_rows() > 0){
			//usuario valido
			foreach($consulta->result() as $row){
				$this->session->set_userdata('idUsuario',$row->idUsuario);
				$this->session->set_userdata('login',$row->login);
				$this->session->set_userdata('tipo',$row->tipo);
			redirect('usuarios/panel','refresh');
			}
		}
		else{
			redirect('usuarios/index','refresh');
		}

		
		
	}

}