<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Material_academico_model extends CI_Model {

    public function listar_materiales() {
        $this->db->select('*');
        $this->db->from('material_academico');
        $query = $this->db->get();
        return $query->result();
    }

    public function obtener_material($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('material_academico');
        return $query->row();
    }

    public function registrar_material($data) {
        return $this->db->insert('material_academico', $data);
    }

    public function modificar_material($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('material_academico', $data);
    }

    public function eliminar_material($id) {
        $this->db->where('id', $id);
        return $this->db->delete('material_academico');
    }
}


