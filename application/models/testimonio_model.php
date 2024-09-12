<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimonio_model extends CI_Model
{
    // Inserta un nuevo testimonio en la base de datos
    public function registrar($data)
    {
        $this->db->insert('testimonios', $data);
    }

    // Elimina un testimonio dado su id
    public function eliminar_testimonio($idtestimonio)
    {
        $this->db->where('id', $idtestimonio);
        $this->db->delete('testimonios');
    }

    // Modifica un testimonio dado su id y los nuevos datos
    public function modificar_testimonio($idtestimonio, $data)
    {
        $this->db->where('id', $idtestimonio);
        $this->db->update('testimonios', $data);
    }

    // Obtener un testimonio específico por ID
    public function obtener_testimonio($id)
    {
        $query = $this->db->get_where('testimonios', array('id' => $id));
        return $query->row();
    }

    // Lista todos los testimonios
    public function listar_testimonios()
    {
        return $this->db->get('testimonios')->result();
    }
}
