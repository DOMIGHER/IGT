<?php 
class AdministradorM extends CI_Model{

    function getDatos(){
        
        $query = $this->db->get('administrador');
        return $query->result();
    }

    function getDato($Idadministrador){
        $this->db->where('Idadministrador',$Idadministrador);
        $query = $this->db->get('administrador');
        return $query->result();
    }

    function deleteDato($Idadministrador){
        $this->db->where('Idadministrador',$Idadministrador);
        $this->db->delete('administrador');
        return TRUE;
    }

    function insertE(){
        $data = array(
            'idadministrador' => $this->input->post('idadministrador'),
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
    
    $this->db->insert('administrador', $data);
    }

    function EditarE($Idadministrador){
        $data = array(
            'Idadministrador' => $this->input->post('Idadministrador'),
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
    $this->db->where('Idadministrador', $Idadministrador);
    $this->db->update('administrador', $data);
    }
}
?>