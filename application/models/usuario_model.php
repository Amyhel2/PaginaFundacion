<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Usuario_model extends CI_Model
{
    // Inserta un nuevo usuario en la base de datos
    public function registrar($data)
    {
        // Verifica que 'contraseña' esté en el array de datos
        if (isset($data['contraseña'])) {
            $this->db->insert('usuario', $data);
        } else {
            throw new Exception('La contraseña es requerida');
        }
    }

    // Elimina un usuario dado su id
    public function eliminarusuario($idusuario)
    {
        $this->db->where('idUsuario', $idusuario);
        $this->db->delete('usuario');
    }

    // Modifica un usuario dado su id y los nuevos datos
    public function modificarusuario($idusuario, $data)
    {
        $this->db->where('idUsuario', $idusuario);
        $this->db->update('usuario', $data);
    }

    // Valida el usuario con el login y la contraseña proporcionada
    public function validar($login, $password)
    {
        $this->db->select('idUsuario, username, contraseña, nombre, primerApellido, segundoApellido, rol');
        $this->db->where('username', $login);
        $query = $this->db->get('usuario');

        if ($query->num_rows() == 1) {
            $usuario = $query->row();

            // Verifica la contraseña
            if (password_verify($password, $usuario->contraseña)) {
                return $usuario;
            }
        }
        return FALSE;
    }

    // Obtiene un usuario dado su id
    public function obtener_usuario($idusuario)
    {
        $this->db->where('idUsuario', $idusuario);
        return $this->db->get('usuario')->row(); // Esto devuelve un solo objeto
    }

    // Lista los usuarios deshabilitados
    public function listadeshabilitados()
{
    $this->db->where('habilitado', 0);
    $query = $this->db->get('usuario');
    return $query; // Devuelve el objeto CI_DB_result
}


    // Obtiene usuarios por rol
    public function obtener_usuarios_por_rol($rol)
    {
        $this->db->where('rol', $rol);
        return $this->db->get('usuario')->result();
    }

    // Lista los usuarios habilitados
    public function listar_usuarios()
    {
        $this->db->where('habilitado', 1); // Usa enteros en lugar de strings
        return $this->db->get('usuario')->result();
    }



    // Obtener la información del usuario por ID
    public function obtener_usuario_por_id($idUsuario) {
        $this->db->where('idUsuario', $idUsuario);
        $query = $this->db->get('usuario');
        return $query->row();
    }

    // Verificar la contraseña del usuario
    public function verificar_password($idUsuario, $password) {
        $this->db->where('idUsuario', $idUsuario);
        $usuario = $this->db->get('usuario')->row();

        // Verificar si la contraseña coincide
        if (password_verify($password, $usuario->contraseña)) {
            return true;
        } else {
            return false;
        }
    }

    // Actualizar la contraseña del usuario
    public function actualizar_password($idUsuario, $password_hash) {
        $this->db->where('idUsuario', $idUsuario);
        $this->db->update('usuario', ['contraseña' => $password_hash]);
    }







   
}
