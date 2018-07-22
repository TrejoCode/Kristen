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
                $this->noticia(0);
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
        var_dump($this->data['noticias']);
        //Obtiene todas los eventos
        $this->data['eventos']=$this->adminModel->getData(array('publicacion'=>'eventos',$this->pagina=>''));
        var_dump($this->data['eventos']);
        //Obtiene todos los trabajos
        $this->data['trabajos']=$this->adminModel->getData(array('publicacion'=>'trabajos',$this->pagina=>''));
        var_dump($this->data['trabajos']);
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
        $this->data['noticias']=$this->adminModel->getData(array('publicacion'=>'noticias',$this->pagina+$page=>''));
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
        $this->data['eventos']=$this->adminModel->getData(array('publicacion'=>'eventos',$this->pagina+$page=>''));
        $this->loadViewAdmin('admin-view-event',$this->data);
    }

    public function trabajo($page)
    {

    }

    public function addNoticia()
    {

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

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
            $datos['titulo']=$this->input->post('titulo');
            $datos['descripcion']=$this->input->post('descripcion');
            $datos['notificar']=$this->input->post('notificacion')!='on'?'false':'true';
            $datos['portada']=$this->input->post('portada');
            $datos['categorias']=$this->input->post('tags');
            $datos['idUsuarios']=$_SESSION['idUser'];
            $datos['carrera']=$_SESSION['idCarrera'];
            $datos['idTipos_Publicacion']=2;
            $datos['contenidos']=array('parrafos'=>$this->input->post('p'),
                'galeria'=>$this->input->post('gallery-img'),
                'enlaces'=>$this->input->post('url'));

            //echo base_url().'public/images/';

            $config['upload_path'] = 'public/images/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['overwrite'] = TRUE;
            $config['max_size'] = "2048000";

            $this->load->library('upload', $config);

            $files = $_FILES;
            for($i=0; $i< count($_FILES['gallery-img']['name']); $i++)
            {
                $_FILES['userfile']['name']= $files['gallery-img']['name'][$i];
                $_FILES['userfile']['type']= $files['gallery-img']['type'][$i];
                $_FILES['userfile']['tmp_name']= $files['gallery-img']['tmp_name'][$i];
                $_FILES['userfile']['error']= $files['gallery-img']['error'][$i];
                $_FILES['userfile']['size']= $files['gallery-img']['size'][$i];

                $this->upload->do_upload();
            }

            if (!$this->upload->do_upload('portada'))
            {
                //Error
            }

            /*$titulo = $this->input->post('titulo');
            $descripcion = $this->input->post('descripcion');
            $notificar= $this->input->post('notificacion')!='on'?'false':'true';
            $portada=$this->input->post('portada');
            $categorias=$this->input->post('tags');
            $autor=$_SESSION['idUser'];
            $carrera=$_SESSION['idCarrera'];
            $tipoPublicacion=2;

            //Arrays de contenido
            $parrafos=$this->input->post('p');
            $galeria=$this->input->post('gallery-img');
            $enlaces=$this->input->post('url');*/





        }
    }

    public function viewAddEvento()
    {
        $this->data['title']='evento';
        $this->data['tipoUsuario']=$_SESSION['tipoUsuario'];
        $this->data['nombre']=$_SESSION['nombre'];
        $this->loadViewAdmin('admin-add-event',$this->data);
    }

    public function viewAddTrabajo()
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