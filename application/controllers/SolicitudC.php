<?php 

class SolicitudC extends CI_Controller{

    public function showsolicitudcliente($idsolucitud){
        $this->load->model('SolicitudM');
        $data['solicitud'] = $this->SolicitudM->getsolicitudescliente();

        $this->load->view('Cliente/solicitud/versolicitudV',$data);
    }

    public function detallsolicitudcliente($idsolucitud){
        $this->load->model('SolicitudM');
        $data['solicitud'] = $this->SolicitudM->detallesolicitudes($idsolucitud);

        $this->load->view('Cliente/solicitud/detallesolicitudV',$data);
    }
    
    
      
}
?>