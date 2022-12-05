<?php 

class CamionetasC extends CI_Controller{

    public function show() {
        $this->load->model('CamionetasM');
        $data['informacion'] = $this->CamionetasM->getDatos();

        $this->load->view('Camioneta/AdminEmpV.php', $data);
        $this->load->view('menu/menuV.php');
    }

    public function insertE() {
        $this->load->model('CamionetasM');
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('modelo', 'modelo', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Camioneta/insertE');
        } else {
            $this->CamionetasM->insertE();
            redirect(base_url('index.php/CamionetasC/show'), 'refresh');
        }
    }

    public function detallesE($Idcamioneta) {
        $this->load->model('CamionetasM');
        $data['deta'] = $this->CamionetasM->getDato($Idcamioneta);

        $this->load->view('Camioneta/detallesE.php', $data);
    }


    public function EditarE($Idcamioneta) {
        $this->load->model('CamionetasM');
        $data['deta'] = $this->CamionetasM->getDato($Idcamioneta);
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('modelo', 'modelo', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Camioneta/EditarE',$data);
        } else {
            $this->CamionetasM->EditarE($Idcamioneta);
            redirect(base_url('index.php/CamionetasC/show'), 'refresh');
        }
    }

    public function borrarE($Idcamioneta) {
        $this->load->model('CamionetasM');
        if ($data['deta'] = $this->CamionetasM->deleteDato($Idcamioneta)) {
            redirect(base_url('index.php/CamionetasC/show'), 'refresh');
        }
    }


}
?>
