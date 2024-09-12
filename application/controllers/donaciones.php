<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donaciones extends CI_Controller
{

	public function procesar()
{
    $data = array(
        'nombre' => $this->input->post('nombre'),
        'email' => $this->input->post('email'),
        'monto' => $this->input->post('monto'),
        'tipoDonacion' => $this->input->post('tipoDonacion'),
        'metodoPago' => $this->input->post('metodoPago')
    );

    // Guardar la donación en la base de datos
    $this->db->insert('donadores', $data);

    // Dependiendo del método de pago
    if ($data['metodoPago'] == 'QR') {
        // Redirigir a la generación de QR
    } else if ($data['metodoPago'] == 'Tarjeta') {
        // Redirigir a la pasarela de pago
    }

    redirect('donaciones/gracias');
}


}