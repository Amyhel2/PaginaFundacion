<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

public function forgot_password() {

// application/controllers/Auth.php (agregado a forgot_password)
$this->load->library('email');

$token = bin2hex(random_bytes(50)); // Generar un token único
$this->db->insert('password_resets', [
'email' => $email,
'token' => $token,
'created_at' => date('Y-m-d H:i:s')
]);

$this->email->from('no-reply@tu-dominio.com', 'Tu Fundación');
$this->email->to($email);
$this->email->subject('Restablecimiento de Contraseña');
$this->email->message('Haz clic en el siguiente enlace para restablecer tu contraseña: '.base_url('auth/reset_password?token='.$token));

if ($this->email->send()) {
$this->load->view('email_sent');
} else {
show_error($this->email->print_debugger());
}




$this->load->helper('form');
$this->load->library('form_validation');

$this->form_validation->set_rules('email', 'Correo Electrónico', 'required|valid_email');

if ($this->form_validation->run() == FALSE) {
    $this->load->view('forgot_password');
} else {
    // Aquí iría la lógica para enviar el correo con el enlace de restablecimiento
    $email = $this->input->post('email');
    // Lógica para enviar el correo
    $this->load->view('emailSend');
}
}


}