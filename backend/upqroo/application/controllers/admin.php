<?php

class admin extends m_controller
{

    public function index()
    {

        /*$this->load->helper('url');
        var_dump($_SESSION);
        echo isset($_SESSION['nombre'])?'hola':'mundo';*/
        //$data['nombre']='luis';
        //$this->loadViewAdmin('admin-add-event',$data);
        if(isset($_SESSION['tipoUsuario']))
        {
            $data['nombre']=$_SESSION['nombre'];
            $data['tipoUsuario']=$_SESSION['tipoUsuario'];
            $this->loadViewAdmin('admin-add-news',$data);
        }
        else
        {
            redirect(base_url());
        }
        //$this->load->model('adminModel');
    }


}