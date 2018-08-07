<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TvController extends M_controller {

	public function index()
	{
		$this->load->model('NoticiasModel');

		$res=$this->NoticiasModel->getNoticias(array('publicacion'=>'noticias/1'));

		$datos['Datos'] = $res;
		$datos['title'] = "TV";

        $this->loadTV('public/tv', $datos);
	}
}