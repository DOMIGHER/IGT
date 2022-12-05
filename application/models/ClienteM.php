<?php 
class ClienteM extends CI_Model{

    function getDatos(){
        
        $query = $this->db->get('cliente');
        return $query->result();
    }

    function getDato($Idcliente){
        $this->db->where('Idcliente',$Idcliente);
        $query = $this->db->get('cliente');
        return $query->result();
    }

    function deleteDato($Idcliente){
        $this->db->where('Idcliente',$Idcliente);
        $this->db->delete('cliente');
        return TRUE;
    }

    function insertE(){
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'apellido_paterno' => $this->input->post('apellido_paterno'),
            'apellido_materno' => $this->input->post('apellido_materno'),
            'correo' => $this->input->post('correo'),
            'contrasenia' => $this->input->post('contrasenia'),
            'nacionalidad' => $this->input->post('nacionalidad'),
            'sexo' => $this->input->post('sexo'),
            'fecha_nacimiento' => $this->input->post('fecha_nacimiento'),
            'telefono_fijo' => $this->input->post('telefono_fijo'),
            'celular' => $this->input->post('celular')
        );
    $this->db->insert('cliente', $data);
    }

    function EditarE($Idcliente){
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'apellido_paterno' => $this->input->post('apellido_paterno'),
            'apellido_materno' => $this->input->post('apellido_materno'),
            'correo' => $this->input->post('correo'),
            'contrasenia' => $this->input->post('contrasenia'),
            'nacionalidad' => $this->input->post('nacionalidad'),
            'sexo' => $this->input->post('sexo'),
            'fecha_nacimiento' => $this->input->post('fecha_nacimiento'),
            'telefono_fijo' => $this->input->post('telefono_fijo'),
            'celular' => $this->input->post('celular')
    );
    $this->db->where('Idcliente', $Idcliente);
    $this->db->update('cliente', $data);
    }

    
}
?>