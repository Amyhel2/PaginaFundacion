<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MaterialAcademico extends CI_Controller {

    

    public function index() {
        $data['materiales'] = $this->material_academico_model->listar_materiales();
        $this->load->view('vistaAdmin');
        $this->load->view('material_academico/lista', $data);
        $this->load->view('adminpie');
    }

    public function registrar() {
        $this->load->library('form_validation');
    
        $this->form_validation->set_rules('titulo', 'Título', 'required');
        $this->form_validation->set_rules('descripcion', 'Descripción', 'required');
        $this->form_validation->set_rules('categoria', 'Categoría', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            // Si la validación falla, vuelve a cargar el formulario
            $this->load->view('vistaAdmin');
            $this->load->view('material_academico/formsMaterial/formulario');
            $this->load->view('adminpie');
        } else {
            $data = array(
                'titulo' => $this->input->post('titulo'),
                'descripcion' => $this->input->post('descripcion'),
                'categoria' => $this->input->post('categoria')
            );
    
            if (!empty($_FILES['archivo']['name'])) {
                $data['ruta_archivo'] = $this->subir_archivo();
            }
    
            $this->material_academico_model->registrar_material($data);
            redirect('materialAcademico/index');
        }
    }
    

    public function modificar() {
        $idMaterial = $this->input->post('idMaterial');  // Recibe el ID del material enviado desde el formulario
        if ($idMaterial) {
            $material = $this->material_academico_model->obtener_material($idMaterial);
            if ($material) {
                $data['material'] = $material;
                $this->load->view('vistaAdmin');
                $this->load->view('material_academico/formsMaterial/formmodificar', $data);
                $this->load->view('adminpie');
                
            } else {
                redirect('materialAcademico/index');  // Redirigir si no se encuentra el material
            }
        } else {
            redirect('materialAcademico/index');  // Redirigir si no se envía ID
        }
    }

    public function modificarbd() {
        $id = $this->input->post('id');
        $data = array(
            'titulo' => $this->input->post('titulo'),
            'descripcion' => $this->input->post('descripcion'),
            'categoria' => $this->input->post('categoria')
        );

        if (!empty($_FILES['archivo']['name'])) {
            // Aquí puedes manejar la subida de archivos
            $data['ruta_archivo'] = $this->subir_archivo();
        }

        $this->material_academico_model->modificar_material($id, $data);
        redirect('materialAcademico/index');
    }

    public function eliminar() {
        $idMaterial = $this->input->post('idMaterial');  // Recibe el ID del material desde el formulario
        if ($idMaterial) {
            $this->material_academico_model->eliminar_material($idMaterial);
        }
        redirect('materialAcademico/index');
    }

    private function subir_archivo() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'pdf|doc|docx|txt';
        $config['file_name'] = uniqid();  // Nombre único para el archivo

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('archivo')) {
            return $this->upload->data('file_name');
        }
        return null;  // Si la subida falla
    }
}

