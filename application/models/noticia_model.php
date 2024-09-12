<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia_model extends CI_Model
{
    // Inserta una nueva noticia en la base de datos
    public function registrar($data)
    {
        $this->db->insert('noticias', $data);
    }

    // Elimina una noticia dado su id
    public function eliminar_noticia($idnoticia)
    {
        $this->db->where('id', $idnoticia);
        $this->db->delete('noticias');
    }

    // Modifica una noticia dado su id y los nuevos datos
    public function modificar_noticia($idnoticia, $data)
    {
        $this->db->where('id', $idnoticia);
        $this->db->update('noticias', $data);
    }

    // Obtener todas las noticias
    /*public function obtener_noticias() {
        $query = $this->db->get('noticias'); // Asume que la tabla se llama 'noticias'
        return $query->result();
    }*/

    //Obtener una noticia específica por ID
    public function obtener_noticias($id) {
        $query = $this->db->get_where('noticias', array('id' => $id));
        return $query->row();
    }

    // Lista todas las noticias
    public function listar_noticias()
    {
        return $this->db->get('noticias')->result();
    }
}
