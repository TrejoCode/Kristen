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
    public $nombre='    ';

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
        $data=array('correo'=>$user,'contrasena'=>$pass);
        $result=$this->m_model->post('Usuarios/iniciaSesion',$data);
        if(!empty($result))
        {

            $getCarrera=$this->m_model->get('',array('carrera'=>$result[0]->idCarreras));
            $getUserType=$this->m_model->get('',array('Tipos_usuario'=>$result[0]->idTipos_Usuario));

            $_SESSION['idUser']=$result[0]->idUsuarios;
            $_SESSION['nombre']=$result[0]->nombre;
            $_SESSION['tipoUsuario']=$result[0]->idTipos_Usuario;
            $_SESSION['idCarrera']=$result[0]->idCarreras;
            $_SESSION['tipoNombre']=$getUserType->nombre;
            $_SESSION['carrera']=$getCarrera->nombre;
        }
        else
        {
            $result='404';
        }
        return $result;
    }

    //Limpia las variables de sesion
    public function logout()
    {
        session_unset();
        session_destroy();
        //return status
    }


    //Carga las vistas publicas
    public function loadView($view,$data)
    {
        $this->load->view('templates/header',$data);
        $this->load->view($view,$data);
        $this->load->view('templates/footer');
    }


    //Carga la vista de administrador
    public function loadViewAdmin($view,$data)
    {
        $this->load->view('private/admin',$data);
        $this->load->view('private/'.$view,$data);
        $this->load->view('templates/footer');
    }


    /*Carga una imagen
    *@param field Nombre del input
    *@param newName nombre que tendra la imagen
    *@param rute ruta espesifica, si no espesifica se pondra en la carpeta raiz
    *@param sameFolder bool false: busca una nueva ruta true: misma ruta espesificada
    */
    public function uploadImg($field,$newName,$rute,$sameFolder)
    {
        $result=array();
        $date=date('Y-m-d');

        if(!$sameFolder)
        {
            $rute='public/images/';
            if (!is_dir($rute.$date)) {
                $rute.=$date;
                mkdir($rute, 0777, TRUE);
            }
            else
            {
                $date.='-'.rand();
                $rute.=$date;
                mkdir($rute, 0777, TRUE);
            }
        }

        $config['upload_path'] = $rute;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['overwrite'] = TRUE;
        $config['max_size'] = "2048000";

        $this->load->library('upload', $config);

        if(is_array($_FILES[$field]['name']))
        {
            $files = $_FILES;
            //echo count($_FILES[$field]['name']);
            $aux=$newName;
            for($i=0; $i< count($_FILES[$field]['name']); $i++)
            {

                $newName=$aux;
                $newName.=$date.($i+1);
                $config['file_name'] =$newName;

                $_FILES['userfile']['name']= $files[$field]['name'][$i];
                $_FILES['userfile']['type']= $files[$field]['type'][$i];
                $_FILES['userfile']['tmp_name']= $files[$field]['tmp_name'][$i];
                $_FILES['userfile']['error']= $files[$field]['error'][$i];
                $_FILES['userfile']['size']= $files[$field]['size'][$i];

                $this->upload->initialize($config);

                if ($this->upload->do_upload())
                {
                    //$result['path'][$i]=$this->upload->data('full_path');
                    $tipe=$this->upload->data('file_ext');
                    $result['rute'][$i]=$rute;
                    $result['full-rute'][$i]=$rute.'/'.$newName.$tipe;
                }
            }
        }
        else
        {
            $newName.=$date;
            $config['file_name'] =$newName;

            $this->upload->initialize($config);

            if ($this->upload->do_upload())
            {
                //$result['path']=$this->upload->data('full_path');
                $tipe=$this->upload->data('file_ext');
                $result['rute']=$rute;
                $result['full-rute']=$rute.'/'.$newName.$tipe;
            }
        }
        return $result;
    }

    //Carga un documento pdf
    //img: nombre del documento
    //src: diretorio donde se almacenara el documento
    public function uploadFile()
    {

    }
}
?>