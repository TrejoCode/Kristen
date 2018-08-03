<?php

class admin extends m_controller
{

    public function index()
    {
        $this->load->model('botaniqr/adminModel');
        if(isset($_SESSION['bUserid']))
        {
            $this->data['nombre']=$_SESSION['bUserName'];
            //Login exitoso
            echo 'Bienvenido '.$this->data['nombre'];
        }
        else
        {
            redirect(base_url().'index.php/botaniqr/login');
        }
    }

    public function bLogin()
    {
        $this->load->library('form_validation');
        $this->load->model('botaniqr/adminModel');
        $this->load->helper(array('form', 'url'));

        $this->form_validation->set_rules('email', 'usuario', 'required');
        $this->form_validation->set_rules('password', 'contraseña', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('botaniqr/templates/header');
            $this->load->view('botaniqr/public/login');
        }
        else
        {
            $username = $this->input->post('email');
            $password = $this->input->post('password');
            $resultado=$this->botaniLogin($username,$password);

            //var_dump($resultado);
            if(!empty($resultado))
            {

                $this->data['nombre']=$resultado[0]->usuario;
                $this->data['title']='ADMIN';
                //redirect(base_url().'index.php/botaniqr');
                $this->load->view('botaniqr/private/admin',$this->data);
                $this->plantas();
                //$this->load->view('botaniqr/private/admin-view-news',$this->data);
            }
            else
            {
                redirect(base_url().'index.php/botaniqr/login');
            }
        }
    }

    public function bLogout()
    {
        $this->botaniLogout();
    }

    public function plantas($pages=0)
    {
        $this->load->model('botaniqr/adminModel');
        $this->data['plantas']=$this->adminModel->getPlantas();
        $this->load->view('botaniqr/private/admin-view-plants',$this->data);
    }

    public function noticias($pages=0)
    {
        $this->load->model('botaniqr/adminModel');
        $this->data['noticias']=$this->adminModel->getPlantas();
        $this->load->view('botaniqr/private/admin-view-news',$this->data);
    }

    public function addNoticia()
    {

    }

    public function addPlanta()
    {

    }

    public function editPlant()
    {

    }

    public function editNoticia()
    {

    }
}