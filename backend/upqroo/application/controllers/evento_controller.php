<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class evento_controller extends m_controller {

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
        $this->load->model('evento_model');

        //$res=array();
        $res=$this->noticia_model->getEvento(array('publicacion'=>'eventos','1'=>'1'));
        $datos['title']='EVENTO';
		
		$this->loadView('public/evento',$datos);
	}
}
