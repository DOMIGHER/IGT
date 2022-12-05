<?php 
class CamionetasM extends CI_Model{

    function getDatos(){
        
        $query = $this->db->get('camioneta');
        return $query->result();
    }

    function getDato($Idcamioneta){
        $this->db->where('Idcamioneta',$Idcamioneta);
        $query = $this->db->get('camioneta');
        return $query->result();
    }

    function deleteDato($Idcamioneta){
        $this->db->where('Idcamioneta',$Idcamioneta);
        $this->db->delete('camioneta');
        return TRUE;
    }

    function insertE(){
        $data = array(
            'modelo' => $this->input->post('modelo'),
            'fecha_compra' => $this->input->post('fecha_compra'),
            'peso_carga' => $this->input->post('peso_carga'),
            'pais_de_origen' => $this->input->post('pais_de_origen'),
            'clase_vehiculo' => $this->input->post('clase_vehiculo')
        );
    $this->db->insert('camioneta', $data);
    }

    function EditarE($Idcamioneta){
        $data = array(
            'modelo' => $this->input->post('modelo'),
            'fecha_compra' => $this->input->post('fecha_compra'),
            'peso_carga' => $this->input->post('peso_carga'),
            'pais_de_origen' => $this->input->post('pais_de_origen'),
            'clase_vehiculo' => $this->input->post('clase_vehiculo')
    );
    $this->db->where('Idcamioneta', $Idcamioneta);
    $this->db->update('camioneta', $data);
    }

    
}
?>