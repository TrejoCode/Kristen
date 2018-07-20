<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class noticia_controller extends m_controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->model('noticia_model');

        //$res=array();
        $res=$this->noticia_model->getNoticia(array('publicacion'=>$_GET['id']));

        $datos['title'] = 'NOTICIA';
        if ($res->idTipos_Publicacion == 2) 
        {
        	$datos['titulo']=$res->titulo;
	        $datos['descripcion']=$res->descripcion;
	        $datos['fecha']=$res->fecha;
	        $datos['portada']=$res->portada;
        }
		
		$this->loadView('public/noticia',$datos);
	}
}