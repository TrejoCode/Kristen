<?php

class admin extends m_controller
{


    public $data;
    public $tipo;
    public $carrera;
    public $pagina=1;

    public function index()
    {

        $this->load->model('adminModel');
        if(isset($_SESSION['tipoUsuario']))
        {
            $this->data['nombre']=$_SESSION['nombre'];
            $this->data['tipoUsuario']=$_SESSION['tipoUsuario'];
            $this->carrera=$_SESSION['idCarrera'];
            $this->tipo=$this->data['tipoUsuario'];
            if($this->tipo==1)
            {
                //Director de carrera
                $this->getEspesificDataByCarrer($this->carrera);
                $this->noticia();
            }
            if($this->tipo==2)
            {
                //Vinculacion
                $this->getGeneralDataByUser($this->tipo);
                $this->noticia();
            }
            if($this->tipo==3)
            {
                //Servicios escolares
                $this->getGeneralDataByUser($this->tipo);
                $this->noticia();
            }
            if($this->tipo==4)
            {
                //Prensa y difucion
                $this->getGeneralDataByUser($this->tipo);
                $this->noticia();
            }
            if ($this->tipo==5)
            {
                //Administrador web
                $this->getGeneralDataByUser($this->tipo);
                $this->noticia();
            }
        }
        else
        {
            redirect(base_url());
        }
    }

    private function getGeneralDataByUser($id)
    {
        if ($id==5)
        {
            //Obtiene la lista de usuarios
            $this->data['usuarios']=$this->adminModel->getUsuarios(array('usuarios'=>''));
            //var_dump($this->data['usuarios']);
        }
        //Obtiene todas las noticias
        $this->data['noticias']=$this->adminModel->getNoticias(array('publicacion'=>'noticias',$this->pagina=>''));
        var_dump($this->data['noticias']);
        //Obtiene todas los eventos
        $this->data['eventos']=$this->adminModel->getEventos(array('publicacion'=>'eventos',$this->pagina=>''));
        var_dump($this->data['eventos']);
        //Obtiene todos los trabajos
        $this->data['trabajos']=$this->adminModel->getTrabajos(array('publicacion'=>'trabajos',$this->pagina=>''));
        var_dump($this->data['trabajos']);
    }

    private function getEspesificDataByCarrer($id)
    {
        //Obtiene todas las noticias de su carrera
        $this->data['noticias']=$this->adminModel->getNoticias(array('publicacion'=>'noticias',
            $id=>$this->pagina));
        //Obtiene todas los eventos de su carrera
        $this->data['eventos']=$this->adminModel->getEventos(array('publicacion'=>'eventos',
            $id=>$this->pagina));
        //Obtiene todos los trabajos de su carrera
        $this->data['trabajos']=$this->adminModel->getTrabajos(array('publicacion'=>'trabajos',
            $id=>$this->pagina));
    }

    public function noticia()
    {
        $this->data['title']='noticias';
        $this->data['tipoUsuario']=$_SESSION['tipoUsuario'];
        $this->data['nombre']=$_SESSION['nombre'];
        //Obtiene todas las noticias
        $this->load->model('adminModel');
        $this->data['noticias']=$this->adminModel->getNoticias(array('publicacion'=>'noticias',$this->pagina=>''));
        $this->loadViewAdmin('admin-view-news',$this->data);
    }

    public function evento()
    {
        $this->data['title']='evento';
        $this->data['tipoUsuario']=$_SESSION['tipoUsuario'];
        $this->data['nombre']=$_SESSION['nombre'];
        //Obtiene todas las noticias
        $this->load->model('adminModel');
        $this->data['eventos']=$this->adminModel->getEventos(array('publicacion'=>'eventos',$this->pagina=>''));
        $this->loadViewAdmin('admin-view-event',$this->data);
    }

    public function trabajo()
    {

    }

    public function addNoticia()
    {
        $this->data['title']='noticias';
        $this->data['tipoUsuario']=$_SESSION['tipoUsuario'];
        $this->data['nombre']=$_SESSION['nombre'];
        $this->loadViewAdmin('admin-add-news',$this->data);
    }

    public function addEvento()
    {
        $this->data['title']='evento';
        $this->data['tipoUsuario']=$_SESSION['tipoUsuario'];
        $this->data['nombre']=$_SESSION['nombre'];
        $this->loadViewAdmin('admin-add-event',$this->data);
    }


    public function addTrabajo()
    {
        $this->loadViewAdmin('add-add-job',$this->data);
    }

    public function editNoticia($id)
    {

    }

    public function editEvento($id)
    {

    }

    public function editTrabajo($id)
    {

    }

}