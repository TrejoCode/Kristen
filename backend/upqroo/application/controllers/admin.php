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
                $this->noticia(0);
            }
            if($this->tipo==3)
            {
                //Servicios escolares
                $this->getGeneralDataByUser($this->tipo);
                $this->noticia(0);
            }
            if($this->tipo==4)
            {
                //Prensa y difucion
                $this->getGeneralDataByUser($this->tipo);
                $this->noticia(0);
            }
            if ($this->tipo==5)
            {
                //Administrador web
                $this->getGeneralDataByUser($this->tipo);
                $this->noticia(0);
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
            $this->data['usuarios']=$this->adminModel->getData(array('usuarios'=>''));
            //var_dump($this->data['usuarios']);
        }
        //Obtiene todas las noticias
        $this->data['noticias']=$this->adminModel->getData(array('publicacion'=>'noticias',$this->pagina=>''));
        //var_dump($this->data['noticias']);
        //Obtiene todas los eventos
        $this->data['eventos']=$this->adminModel->getData(array('publicacion'=>'eventos',$this->pagina=>''));
        //var_dump($this->data['eventos']);
        //Obtiene todos los trabajos
        $this->data['trabajos']=$this->adminModel->getData(array('publicacion'=>'trabajos',$this->pagina=>''));
        //var_dump($this->data['trabajos']);
    }

    private function getEspesificDataByCarrer($id)
    {
        //Obtiene todas las noticias de su carrera
        $this->data['noticias']=$this->adminModel->getData(array('publicacion'=>'noticias',
            $id=>$this->pagina));
        //Obtiene todas los eventos de su carrera
        $this->data['eventos']=$this->adminModel->getData(array('publicacion'=>'eventos',
            $id=>$this->pagina));
        //Obtiene todos los trabajos de su carrera
        $this->data['trabajos']=$this->adminModel->getData(array('publicacion'=>'trabajos',
            $id=>$this->pagina));
    }

    public function noticia($page=0)
    {
        $this->data['title']='noticias';
        $this->data['tipoUsuario']=$_SESSION['tipoUsuario'];
        $this->data['nombre']=$_SESSION['nombre'];
        $this->data['pagina']=$page+1;
        //Obtiene todas las noticias
        $this->load->model('adminModel');
        if($this->data['tipoUsuario']==1){
            $carrera=$_SESSION['idCarrera'];
            $this->data['noticias']=$this->adminModel->getData(array('publicacion'=>'noticias',$carrera=>$this->pagina+$page));
        }
        else
        {
            $this->data['noticias']=$this->adminModel->getData(array('publicacion'=>'noticias',$this->pagina+$page=>''));
        }
        $this->loadViewAdmin('admin-view-news',$this->data);
    }

    public function evento($page=0)
    {
        $this->data['title']='evento';
        $this->data['tipoUsuario']=$_SESSION['tipoUsuario'];
        $this->data['nombre']=$_SESSION['nombre'];
        $this->data['pagina']=$page+1;
        //Obtiene todas las noticias
        $this->load->model('adminModel');
        if($this->data['tipoUsuario']==1){
            $carrera=$_SESSION['idCarrera'];
            $this->data['eventos']=$this->adminModel->getData(array('publicacion'=>'eventos',$carrera=>$this->pagina+$page));
        }
        else
        {
            $this->data['eventos']=$this->adminModel->getData(array('publicacion'=>'eventos',$this->pagina+$page=>''));
        }
        $this->loadViewAdmin('admin-view-event',$this->data);
    }

    public function trabajo($page=0)
    {
        $this->data['title']='noticias';
        $this->data['tipoUsuario']=$_SESSION['tipoUsuario'];
        $this->data['nombre']=$_SESSION['nombre'];
        $this->data['pagina']=$page+1;
        //Obtiene todas las noticias
        $this->load->model('adminModel');
        if($this->data['tipoUsuario']==1){
            $carrera=$_SESSION['idCarrera'];
            $this->data['trabajos']=$this->adminModel->getData(array('publicacion'=>'trabajos',$carrera=>$this->pagina+$page));
        }
        else
        {
            $this->data['trabajos']=$this->adminModel->getData(array('publicacion'=>'trabajos',$this->pagina+$page=>''));
        }
        $this->loadViewAdmin('admin-view-job',$this->data);
    }

    public function addNoticia()
    {

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('adminModel');

        $this->form_validation->set_rules('titulo', 'titulo', 'required|max_length[50]');
        $this->form_validation->set_rules('descripcion', 'descriction', 'required|max_length[200]');
        //$this->form_validation->set_rules('portada', 'portada', 'required');
        $this->form_validation->set_rules('tags', 'etiquetas', 'required');



        if ($this->form_validation->run() === FALSE)
        {
            $this->data['title']='noticias';
            $this->data['tipoUsuario']=$_SESSION['tipoUsuario'];
            $this->data['nombre']=$_SESSION['nombre'];
            $this->loadViewAdmin('admin-add-news',$this->data);
        }
        else
        {
            //Post a la db
            /*
             */
            $galery=$this->uploadImg('gallery-img','gallery','',false);
            $cover=$this->uploadImg('portada','cover',$galery['rute'][0],true);
            $datos['titulo']=$this->input->post('titulo');
            $datos['descripcion']=$this->input->post('descripcion');
            $datos['notificar']=$this->input->post('notificacion')!='on'?'false':'true';
            $datos['portada']=$cover['full-rute'];
            $datos['categorias']=$this->input->post('tags');
            $datos['idUsuarios']=$_SESSION['idUser'];
            $datos['carrera']=$_SESSION['idCarrera'];
            $datos['idTipos_Publicacion']=2;


            $imgs=array('idTipoContenidos'=>5,'contenido'=>array('cantidad'=>6,'imagenes'=>$galery['full-rute']));
            //var_dump(json_encode($imgs));

            $parrafos=array();
            foreach ($this->input->post('p') as $parrafo)
            {
                $aux=array('idTipoContenidos'=>1,'contenido'=>array('texto'=>$parrafo));
                array_push($parrafos,$aux);

            }
            //var_dump(json_encode($parrafos));

            $enlaces=array();
            $cont=0;
            foreach ($this->input->post('url') as $enlace)
            {
                $cont++;
                $aux=array('idTipoContenidos'=>2,'contenido'=>array('texto'=>'enlace'.$cont,'url'=>$enlace));
                array_push($enlaces,$aux);

            }
            //var_dump(json_encode($enlaces));
            $parrafos=array_merge($parrafos,$enlaces);
            array_push($parrafos,$imgs);
            $datos['contenidos']=$parrafos;

            var_dump(json_encode($datos));
            /*if(!empty($this->adminModel->post('publicacion',$datos)))
            {
                $this->noticia();
            }
            else
            {
                redirect(base_url().'index.php/administrador/ver/evento');
            }*/
        }
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
        $this->data['title']='evento';
        $this->data['tipoUsuario']=$_SESSION['tipoUsuario'];
        $this->data['nombre']=$_SESSION['nombre'];
        $this->loadViewAdmin('admin-add-job',$this->data);
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