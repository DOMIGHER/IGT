<?php  

/*
   *
   *
     By Ald0
   *
   *
*/

class ClienteM extends CI_Model
{
	
//-------------------------------------------------------------------------------------------------------------------

#Consultar





//--------------------------------------------------------------------------------------------------------------------
    
#Agregar

//Administrar solicitud

function AgregarSolicitudM()
{
     $data = array
     (
        'fecha_registro' => $this->input->post('fecha_registro'),
        'costo_estacionamiento' => $this->input->post('costo_estacionamiento'),
     );
     $this->db->insert('solicitud', $data);

}




//--------------------------------------------------------------------------------------------------------------------
    
#Editar

//Modificar cuenta

function EditarCuenta($idcliente){
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'apellido_paterno' => $this->input->post('apellido_paterno'),
            'apellido_materno' => $this->input->post('apellido_materno'),
            'correo' => $this->input->post('correo'),
            'celular' => $this->input->post('celular'),
            'pais' => $this->input->post('pais'),
            'sexo' => $this->input->post('sexo'),
            'fecha_nacimiento' => $this->input->post('fecha_nacimiento'),
    );
    $this->db->where('idcliente', $idcliente);
    $this->db->update('cliente', $data);    
    }

//Adminsitrar solicitud

function EditarSolicitud($idsolicitud){
    $data = array(
        'fecha_registro' => $this->input->post('fecha_registro'),
        'costo_estacionamiento' => $this->input->post('costo_estacionamiento'),
);
$this->db->where('idsolicitud', $idsolicitud);
$this->db->update('solicitud', $data);
}

 //--------------------------------------------------------------------------------------------------------------------
    
#Borrar

//Administrar solicitud
function BorrarSolicitud($idsolicitud){
    $this->db->where('idsolicitud',$idsolicitud);
    $this->db->delete('solicitud');
    return TRUE;
}



//---------------------------------------------------------------------------------------------------------------------

#Enviar





//---------------------------------------------------------------------------------------------------------------------

#Login





//---------------------------------------------------------------------------------------------------------------------

#Obtener

//Cliente

function getDatosC(){
    $query = $this->db->get('cliente');
    return $query->result();
}

function getDatoC($idcliente){
    $this->db->where('idcliente',$idcliente);
    $query = $this->db->get('cliente');
    return $query->result();
}

//Solicitud

function getDatosS(){
    $query = $this->db->get('solicitud');
    return $query->result();
}

function getDatoS($idsolicitud){
    $this->db->where('idsolicitud',$idsolicitud);
    $query = $this->db->get('solicitud');
    return $query->result();
}

//direccion origen

function getDatosO(){
    $query = $this->db->get('direccionorigen');
    return $query->result();
}

function getDatoO($iddireccionorigen){
    $this->db->where('iddireccionorigen',$iddireccionorigen);
    $query = $this->db->get('direccionorigen');
    return $query->result();
}

//---------------------------------------------------------------------------------------------------------------------

#Validar

function validaUsuario($Correo, $Pass){
    $sql="Select IdUsuario, Correo, Perfil from Usuarios where Correo = '$Correo' and Pass = '$Pass'";
    $query = $this->db->query($sql);
    //echo $this->db->last_query();
    return $query->result();
}

//---------------------------------------------------------------------------------------------------------------------

}?>
