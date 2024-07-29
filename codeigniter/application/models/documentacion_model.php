<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documentacion_model extends CI_Model {
	
	public function listalibro(){
		$this->db->select('*');
		$this->db->from('materialpdf');
		$this->db->where('habilitado','1');
		return $this->db->get();//devuelve el resultado
	}
	public function listadeshabilitados(){
		$this->db->select('*');
		$this->db->from('materialpdf');
		$this->db->where('habilitado','0');
		return $this->db->get();//devuelve el resultado
	}
	public function agregarlibro($data){
		$this->db->insert('materialpdf',$data);
	}
	public function eliminarlibro($idlibro){
		$this->db->where('idLibro',$idlibro);
		$this->db->delete('materialpdf');
	}
	public function recuperarlibro($idlibro){
		$this->db->select('*');
		$this->db->from('materialpdf');
		$this->db->where('idLibro',$idlibro);
		return $this->db->get();
	}
	public function modificarlibro($idlibro,$data){
		$this->db->where('idLibro',$idlibro);
		$this->db->update('materialpdf',$data);
	}
}