<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Deporte_model extends CI_Model
{
    // Inserta un nuevo deporte en la base de datos
    public function registrar($data)
    {
        $this->db->insert('deportes', $data);
    }

    // Elimina un deporte dado su id
    public function eliminar_deporte($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('deportes');
    }

    // Modifica un deporte dado su id y los nuevos datos
    public function modificar_deporte($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('deportes', $data);
    }

    // Obtener todos los deportes
    public function listar_deportes()
    {
        $query = $this->db->get('deportes');
        return $query->result();
    }

    // Obtener un deporte específico por ID
    public function obtener_deporte($id)
    {
        $query = $this->db->get_where('deportes', array('id' => $id));
        return $query->row();
    }
    public function listar_partidos()
    {
        $this->db->order_by('puntaje_local', 'DESC');
        $query = $this->db->get('deportes');
        return $query->result();
    }
}
