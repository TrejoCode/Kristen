<?php

/**
 *
 */
class m_controller extends Ci_Controller
{
    //
    public $status=false;
    //almacena el tipo del usuario logueado
    public $tipoUsario=0;
    //almacena el nombre del usuario logueado
    public $nombre='';

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('../core/m_model','initModel');
    }

    //Revisa el estado del usuario (logueado=true, noLogueado=false)
    public function checkLogin()
    {
        return $this->tipoUsario;
    }

    //Envia peticion al web service, esperando una respuesta,
    //si la respuesta es positiva llena la variable de sesion
    public function login($user,$pass)
    {
        $data=array('user'=>$user,'pass'=>$pass);
        $result=$this->initiModel->get($data);
        if(!empty($result))
        {
            $this->session->set_userdata($result);
            $this->tipoUsario=$this->session->userdata('tipo');
            $this->nombre=$this->session->userdata('nombre');
        }
        //return status
    }

    //Limpia las variables de sesion
    public function logout()
    {
        $this->session->sess_destroy();
        //return status
    }

    //Envia un post al webservice con la informacion necesaria para crear una enviarNotificacion
    //titulo
    //descripcion
    public function enviarNotificacion()
    {
        //return success
    }


    //Carga las vistas publicas
    public function loadView($view)
    {
        $this->load->view('templates/header');
        $this->load->view($view);
        $this->load->view('templates/footer');
    }


    //Carga la vista de administrador
    public function loadViewAdmin($view)
    {

    }


    //Carga una imagen
    //img: nombre de la imagen
    //src: diretorio donde se almacenara la imagen
    public function uploadImg($img,$src)
    {

    }

    //Carga un documento pdf
    //img: nombre del documento
    //src: diretorio donde se almacenara el documento
    public function uploadFile()
    {

    }
}
?>