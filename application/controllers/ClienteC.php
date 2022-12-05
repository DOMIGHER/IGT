<?php 

class ClienteC extends CI_Controller{

    public function showcuentacliente($idcliente){
        $this->load->model('ClienteM');
        $data['cliente'] = $this->ClienteM->getcuenta();
        
        $this->load->view('Cliente/cuenta/vercuentaV',$data);

    }

}
?>