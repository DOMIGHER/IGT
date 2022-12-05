<?php 

class ClienteC extends CI_Controller{

    public function show() {
        $this->load->model('ClienteM');
        $data['informacion'] = $this->ClienteM->getDatos();

        $this->load->view('Cliente/AdminEmpV.php', $data);
        $this->load->view('menu/menuV.php');
    }

    public function insertE() {
        $this->load->model('ClienteM');
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Cliente/insertE');
        } else {
            $this->ClienteM->insertE();
            redirect(base_url('index.php/ClienteC/show'), 'refresh');
        }
    }

    public function detallesE($Idcliente) {
        $this->load->model('ClienteM');
        $data['deta'] = $this->ClienteM->getDato($Idcliente);

        $this->load->view('Cliente/detallesE.php', $data);
    }


    public function EditarE($Idcliente) {
        $this->load->model('ClienteM');
        $data['deta'] = $this->ClienteM->getDato($Idcliente);
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Cliente/EditarE',$data);
        } else {
            $this->ClienteM->EditarE($Idcliente);
            redirect(base_url('index.php/ClienteC/show'), 'refresh');
        }
    }

    public function borrarE($Idcliente) {
        $this->load->model('ClienteM');
        if ($data['deta'] = $this->ClienteM->deleteDato($Idcliente)) {
            redirect(base_url('index.php/ClienteC/show'), 'refresh');
        }
    }

}
?>