<?php 
class SolicitudM extends CI_Model{

  function getsolicitudescliente(){
      $query = $this->db->get('solicitud');
      return $query->result();
  }

  function detallesolicitudes($idsolucitud){
      $this->db->where('idsolucitud',$idsolucitud);
      $query = $this->db->get('solicitud');
      return $query->result();


  }
}
?>