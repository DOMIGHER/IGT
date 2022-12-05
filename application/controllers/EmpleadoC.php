<?php 

class EmpleadoC extends CI_Controller{

    public function show() {
        $this->load->model('EmpleadoM');
        $data['informacion'] = $this->EmpleadoM->getDatos();

        $this->load->view('Empleado/AdminEmpV.php', $data);
        $this->load->view('menu/menuV.php');
    }

    public function insertE() {
        $this->load->model('EmpleadoM');
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Empleado/insertE');
        } else {
            $this->EmpleadoM->insertE();
            redirect(base_url('index.php/EmpleadoC/show'), 'refresh');
        }
    }

    public function detallesE($Idempleado) {
        $this->load->model('EmpleadoM');
        $data['deta'] = $this->EmpleadoM->getDato($Idempleado);

        $this->load->view('Empleado/detallesE.php', $data);
    }


    public function EditarE($Idempleado) {
        $this->load->model('EmpleadoM');
        $data['deta'] = $this->EmpleadoM->getDato($Idempleado);
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Empleado/EditarE',$data);
        } else {
            $this->EmpleadoM->EditarE($Idempleado);
            redirect(base_url('index.php/EmpleadoC/show'), 'refresh');
        }
    }

    public function borrarE($Idempleado) {
        $this->load->model('EmpleadoM');
        if ($data['deta'] = $this->EmpleadoM->deleteDato($Idempleado)) {
            redirect(base_url('index.php/EmpleadoC/show'), 'refresh');
        }
    }

}
?>