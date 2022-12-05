<?php

/*
   *
   *
     By Ald0
   *
   *
*/

class ClienteC extends CI_Controller
{

    //-------------------------------------------------------------------------------------------------------------------

    #Consultar

    //Modificar cuenta

    public function MuestraCuenta()
	{
        $this->load->model('ClienteM');
        $data['cliente'] = $this->ClienteM->getDatosC();
        $this->load->view('Cliente/AdministrarCuenta/4.ModificarCuenta.php',$data);
	}

    //Administrar solicitud

    public function MuestraSolicitud()
	{
        $this->load->model('ClienteM');
        $data['solicitud'] = $this->ClienteM->getDatosS();
        $this->load->view('Cliente/AdministraSolicitud/1.AdministrarSolicitud.php',$data);
	}

    public function MuestraFormulario()
	{
        $this->load->view('Cliente/AdministraSolicitud/2.EnviarSolicitud.php');
	} 

    public function MostrarHabitacion()
	{
        $this->load->view('Cliente/3.AgregarHabitacion.php');
	}

    public function ConsultarSolicitud($idsolicitud)
    {
        $this->load->model('ClienteM');
        $data['solicitud'] = $this->ClienteM->getDatoS($idsolicitud);
        $data['cliente'] = $this->ClienteM->getDatosC();
        $this->load->view('Cliente/AdministraSolicitud/ConsultarSolicitud.php', $data);
    }

    //Administrar reporte

    public function MuestraReporte()
	{
        $this->load->model('ClienteM');
        $data['solicitud'] = $this->ClienteM->getDatosS();
        $this->load->view('Cliente/7.AdministrarReporte.php',$data);
	}

    public function ConsultarReporte($idsolicitud)
    {
        $this->load->model('ClienteM');
        $data['solicitud'] = $this->ClienteM->getDatoS($idsolicitud);
        $data['cliente'] = $this->ClienteM->getDatosC();
        $this->load->view('Cliente/8.ConsultarReporte.php',$data);
    }

    //Información de la empresa

    public function MuestraInfo()
	{
        $this->load->view('Cliente/6.InformacionEmpresa.php');
	}
    
    //--------------------------------------------------------------------------------------------------------------------
    
    #Agregar

    //Administrar solicitud
    
    public function AgregarSolicitud()
    {
        $this->load->model('ClienteM');
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('costo_estacionamiento', 'costo_estacionamiento', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->model('ClienteM');
            $data['cliente'] = $this->ClienteM->getDatosC();
            $this->load->view('Cliente/AdministraSolicitud/2.EnviarSolicitud.php',$data);
        } else {
            $this->ClienteM->AgregarSolicitudM();
            redirect(base_url('index.php/ClienteC/MuestraSolicitud'), 'refresh');
        }
    }



    //--------------------------------------------------------------------------------------------------------------------
    
    #Editar

    //Modificar cuenta

    public function EditarCuenta($idcliente) {
        $this->load->model('ClienteM');
        $data['cliente'] = $this->ClienteM->getDatoC($idcliente);

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Cliente/AdministrarCuenta/5.ModificarCuentas.php',$data);
        } else {
            $this->ClienteM->EditarCuenta($idcliente);
            redirect(base_url('index.php/ClienteC/MuestraCuenta'), 'refresh');
        }
    }

    //Administrar solicitud

    public function EditarSolicitud($idsolicitud) {
        $this->load->model('ClienteM');
        $data['solicitud'] = $this->ClienteM->getDatoS($idsolicitud);
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('costo_estacionamiento','costo_estacionamiento', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['cliente'] = $this->ClienteM->getDatosC();
            $this->load->view('Cliente/AdministraSolicitud/EditarSolicitud.php',$data);
        } else {
            $this->ClienteM->EditarSolicitud($idsolicitud);
            redirect(base_url('index.php/ClienteC/MuestraSolicitud'), 'refresh');
        }
    }

    //--------------------------------------------------------------------------------------------------------------------
    
    #Borrar
    
    //Modificar cuenta

    public function BorrarCuenta()
	{
        $this->load->view('Advertencia/LogOut.php');
	}

    //Administrar solicitud

    public function BorrarSolicitud($idsolicitud)
    {
        $this->load->model('ClienteM');
        if ($data['solicitud'] = $this->ClienteM->BorrarSolicitud($idsolicitud)) {
            redirect(base_url('index.php/ClienteC/MuestraSolicitud'), 'refresh');
        }
    }
    
    //Administrar reporte

    public function BorrarReporte()
	{
        $this->load->view('Advertencia/Delete.php');
	}

    //---------------------------------------------------------------------------------------------------------------------

    #Enviar

    //Administrarsolicitud

    public function EnviarSolicitud()
	{
        $this->load->view('Advertencia/success.php');
	}

    //---------------------------------------------------------------------------------------------------------------------

    #Login

    public function login()
	{

	$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('Correo', 'Correo', 'required');
	    $this->form_validation->set_rules('Pass', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('headers/head');
				$this->load->view('usuario/login');
        }
        else
        {
                $this->load->model('ClienteM');
                $usuario = $this->ClienteM->validaUsuario($this->input->post('Correo'), md5($this->input->post('Pass')));
                //if($usuario[0]->Perfil==1){
                if(count($usuario)>0){
                        $newdata = array(
                                'Correo'  => $this->input->post('Correo'),
                                'Perfil'     => $usuario[0]->Perfil,
                                'Logeado' => TRUE
                        );

                        $this->session->set_userdata($newdata);
                       redirect(base_url('index.php/ClienteC/MuestraSolicitud'),'refresh'); 
                }
                //
        }
	}

//---------------------------------------------------------------------------------------------------------------------

}?>


