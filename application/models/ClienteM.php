<?php 
class ClienteM extends CI_Model{

    function getcuenta(){
        $query = $this->db->get('cliente');
        return $query->result();

    }

    
}
?>