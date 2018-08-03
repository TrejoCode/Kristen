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
            //echo 'Bienvenido '.$this->data['nombre'];
            $this->plantas();
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
                //$this->load->view('botaniqr/private/admin',$this->data);
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
        $this->data['title']='ADMIN';
        $this->data['nombre']=$_SESSION['bUserName'];
        $this->data['plantas']=$this->adminModel->getPlantas();
        $this->load->view('botaniqr/private/admin',$this->data);
        $this->load->view('botaniqr/private/admin-view-plants',$this->data);
    }

    public function noticias($pages=0)
    {
        $this->load->model('botaniqr/adminModel');
        $this->data['title']='ADMIN';
        $this->data['nombre']=$_SESSION['bUserName'];
        $this->data['noticias']=$this->adminModel->getNoticias();
        $this->load->view('botaniqr/private/admin',$this->data);
        $this->load->view('botaniqr/private/admin-view-news',$this->data);
    }

    public function addNoticia()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('botaniqr/adminModel');

        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('descripcion', 'descriction', 'required');
        $this->form_validation->set_rules('contenido', 'contenido', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->data['title']='noticias';
            $this->data['nombre']=$_SESSION['bUserName'];
            $this->load->view('botaniqr/private/admin', $this->data);
            $this->load->view('botaniqr/private/admin-add-news',$this->data);
        }
        else
        {
            $idP=null;
            $isInsert=true;
            if($this->input->post('idNoticia')!=null)
            {
                $isInsert=false;
                $idP=$this->input->post('idNoticia');
            }
            $cover=$this->uploadImg('imagen','cover','',false);
            $date=new DateTime(); //this returns the current date time
            $result = $date->format('Y-m-d-H-i-s');
            $nPlant=array(
                'id'=>$idP,
                'fecha'=>$result,
                'nombre'=>$this->input->post('nombre'),
                'descripcion'=>$this->input->post('descripcion'),
                'contenido'=>$this->input->post('contenido'),
                'imagen'=>!empty($cover['full-rute'])?$cover['full-rute']:''
            );

            if($isInsert)
            {
                $this->adminModel->addNoticia($nPlant);
                redirect(base_url().'index.php/botaniqr/administrador/ver/noticias/0');
            }
            else
            {
                $this->adminModel->updateNoticia($nPlant);
                redirect(base_url().'index.php/botaniqr/administrador/ver/noticias/0');
            }
        }
    }

    public function addPlanta()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('botaniqr/adminModel');

        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('descripcion', 'descriction', 'required');
        $this->form_validation->set_rules('cientifico', 'cientifico', 'required');
        $this->form_validation->set_rules('taxonomia', 'taxonomia', 'required');
        $this->form_validation->set_rules('aplicaciones', 'aplicaciones', 'required');


        if ($this->form_validation->run() === FALSE)
        {
            $this->data['title']='planta';
            $this->data['nombre']=$_SESSION['bUserName'];
            $this->load->view('botaniqr/private/admin', $this->data);
            $this->load->view('botaniqr/private/admin-add-plant',$this->data);
        }
        else
        {
            $idP=null;
            $isInsert=true;
            $total=count($this->adminModel->getPlantas());
            $nCod='UPQROO_P_'.($total+1);
            $qr='https://api.qrserver.com/v1/create-qr-code/?size=200x200&data='.$nCod;
            if($this->input->post('idPlanta')!=null)
            {
                $isInsert=false;
                $idP=$this->input->post('idPlanta');
                $nCod=$this->input->post('codigo');
                $qr=$this->input->post('qr');
            }
            $cover=$this->uploadImg('imagen','cover','',false);                        
            $nPlant=array(
                'id'=>$idP,
                'codigo'=>$nCod,
                'nombre'=>$this->input->post('nombre'),
                'cientifico'=>$this->input->post('cientifico'),
                'descripcion'=>$this->input->post('descripcion'),
                'taxonomia'=>$this->input->post('taxonomia'),
                'aplicaciones'=>$this->input->post('aplicaciones'),
                'imagen'=>!empty($cover['full-rute'])?$cover['full-rute']:'',
                'qr'=>$qr
            );

            if($isInsert)
            {
                $this->adminModel->addPlanta($nPlant);
                redirect(base_url().'index.php/botaniqr/administrador/ver/plantas/0');
            }
            else
            {
                $this->adminModel->updatePlanta($nPlant);
                redirect(base_url().'index.php/botaniqr/administrador/ver/plantas/0');
            }
        }
    }

    public function editPlanta($id)
    {
        $this->data['title']='EDITAR PLANTA';
        $this->data['nombre']=$_SESSION['bUserName'];
        $this->load->model('botaniqr/adminModel');
        $this->data['plantas']=$this->adminModel->getPlanta($id);
        //var_dump($this->data['noticias']);
        $this->load->view('botaniqr/private/admin',$this->data);
        $this->load->view('botaniqr/private/admin-add-plant',$this->data);
    }

    public function editNoticia($id)
    {
        $this->data['title']='EDITAR NOTICIA';
        $this->data['nombre']=$_SESSION['bUserName'];
        $this->load->model('botaniqr/adminModel');
        $this->data['noticias']=$this->adminModel->getNoticia($id);
        //var_dump($this->data['noticias']);
        $this->load->view('botaniqr/private/admin',$this->data);
        $this->load->view('botaniqr/private/admin-add-news',$this->data);
    }

    public function eliminarPlanta($id)
    {

    }

    public function eliminarNoticia($id)
    {

    }

}