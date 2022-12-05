<?php 

class InfoEmpresaC extends CI_Controller{

    public function show() {
        $this->load->model('InfoEmpresaM');
        $data['informacion'] = $this->InfoEmpresaM->getDatos();

        $this->load->view('Infoempresa/AdminEmpV.php', $data);
        $this->load->view('menu/menuV.php');
    }

    public function EditarE($IdInfoEmpresa) {
        $this->load->model('InfoEmpresaM');
        $data['deta'] = $this->InfoEmpresaM->getDato($IdInfoEmpresa);
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('Descripcion', 'Descripcion', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Infoempresa/EditarE',$data);
        } else {
            $this->InfoEmpresaM->EditarE($IdInfoEmpresa);
            redirect(base_url('index.php/InfoempresaC/show'), 'refresh');
        }
    }

}
?>