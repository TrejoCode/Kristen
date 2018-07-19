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
        $res=$this->noticia_model->getNoticias(array('publicacion'=>'noticias','1'=>'1'));
        /*foreach ($res as $r) 
        {
        	if ($tipo == 2) 
	        {
	        	$datos['titulo']=$r->titulo;
		        $datos['descripcion']=$r->descripcion;
		        $datos['fecha']=$r->fecha;
		        //$datos['portada']=$res[$i]->portada;
		        echo $datos['titulo'];
	        }
        }*/
        if ($res[0]->idTipos_Publicacion == 2) 
        {
        	$datos['titulo']=$res[0]->titulo;
	        $datos['descripcion']=$res[0]->descripcion;
	        $datos['fecha']=$res[0]->fecha;
	        $datos['portada']=$res[0]->portada;
	        //echo $datos['titulo'];
        }
		
		$this->loadView('public/noticias',$datos);
	}
}
