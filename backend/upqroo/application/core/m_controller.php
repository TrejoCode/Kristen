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
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_model');
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
        $data=array('nombre'=>$user,'contrasena'=>$pass);
        $result=$this->m_model->post('Usuarios/iniciaSesion',$data);
        if(!empty($result))
        {
            $getCarrera=$this->m_model->get(array('carrera'=>$result[0]->idCarreras));

            $getUserType=$this->m_model->get(array('Tipos_usuario'=>$result[0]->idTipos_Usuario));

            $_SESSION['idUser']=$result[0]->idUsuarios;
            $_SESSION['nombre']=$result[0]->nombre;
            $_SESSION['tipoUsuario']=$result[0]->idTipos_Usuario;
            $_SESSION['idCarrera']=$result[0]->idCarreras;
            $_SESSION['tipoNombre']=$getUserType->nombre;
            $_SESSION['carrera']=$getCarrera->nombre;
        }
        return $result;
    }

    //Limpia las variables de sesion
    public function logout()
    {
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
    public function loadView($view,$data)
    {
        $this->load->view('templates/header',$data);
        $this->load->view($view,$data);
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