<?php 
class InfoEmpresaM extends CI_Model{

    function getDatos(){
        
        $query = $this->db->get('infoempresa');
        return $query->result();
    }

    function getDato($IdInfoEmpresa){
        $this->db->where('IdInfoEmpresa',$IdInfoEmpresa);
        $query = $this->db->get('infoempresa');
        return $query->result();
    }

    function EditarE($IdInfoEmpresa){
        $data = array(
            'Descripcion' => $this->input->post('Descripcion')
    );
    $this->db->where('IdInfoEmpresa', $IdInfoEmpresa);
    $this->db->update('infoempresa', $data);
    }
    
}
?>