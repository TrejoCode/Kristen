<?php

class admin extends m_controller
{

    public function index()
    {

        $this->load->helper('url');
        var_dump($_SESSION);
        echo isset($_SESSION['nombre'])?'hola':'mundo';
        /*if(isset($_SESSION['nombre']))
        {
            $data['nombre']=$_SESSION['nombre'];
            $data['tipoUsuario']=$_SESSION['tipoUsuario'];
            $this->loadViewAdmin('admin-add-news',$data);
        }
        else
        {
            redirect(base_url());
        }*/
        //$this->load->model('adminModel');
    }


}