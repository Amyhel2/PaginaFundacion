<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donacion_model extends CI_Model {
	
	public function obtener_donadores()
    {
        return $this->db->get('donadores')->result(); // Suponiendo que tienes una tabla llamada 'donadores'
    }
}