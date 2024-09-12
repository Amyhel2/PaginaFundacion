<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria_model extends CI_Model
{
    // Inserta un nuevo archivo en la galería
    public function registrar($data)
    {
        $this->db->insert('galeria', $data);
    }

    // Elimina un archivo de la galería dado su id
    public function eliminar_archivo($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('galeria');
    }

    // Modifica un archivo de la galería dado su id y los nuevos datos
    public function modificar_archivo($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('galeria', $data);
    }

    // Obtiene un archivo de la galería dado su id
    public function obtener_archivo($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('galeria')->row(); // Devuelve un solo objeto
    }

    // Lista todos los archivos de la galería
    public function listar_archivos() {
        $query = $this->db->get('galeria'); // Ajusta el nombre de la tabla según tu base de datos
        return $query->result();
    }
}
