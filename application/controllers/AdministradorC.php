<?php 

class AdministradorC extends CI_Controller{

    public function show() {
        $this->load->model('AdministradorM');
        $data['informacion'] = $this->AdministradorM->getDatos();

        $this->load->view('Administrador/AdminEmpV.php', $data);
        $this->load->view('menu/menuV.php');
    }

    public function insertE() {
        $this->load->model('AdministradorM');
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Administrador/insertE');
        } else {
            $this->AdministradorM->insertE();
            redirect(base_url('index.php/AdministradorC/show'), 'refresh');
        }
    }

    public function detallesE($Idadministrador) {
        $this->load->model('AdministradorM');
        $data['deta'] = $this->AdministradorM->getDato($Idadministrador);

        $this->load->view('Administrador/detallesE.php', $data);
    }


    public function EditarE($Idadministrador) {
        $this->load->model('AdministradorM');
        $data['deta'] = $this->AdministradorM->getDato($Idadministrador);
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Administrador/EditarE',$data);
        } else {
            $this->AdministradorM->EditarE($Idadministrador);
            redirect(base_url('index.php/AdministradorC/show'), 'refresh');
        }
    }

    public function borrarE($Idadministrador) {
        $this->load->model('AdministradorM');
        if ($data['deta'] = $this->AdministradorM->deleteDato($Idadministrador)) {
            redirect(base_url('index.php/AdministradorC/show'), 'refresh');
        }
    }
}
?>