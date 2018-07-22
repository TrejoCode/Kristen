<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class noticias_controller extends m_controller {

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
        $this->load->model('noticias_model');

        $numPag = 1;
        $res=$this->noticias_model->getNoticias(array('publicacion'=>'noticias/'.$numPag.''));

        $datos['Datos'] = $res;
        $datos['title'] = 'NOTICIAS';
		
		$this->loadView('public/noticias',$datos);
	}

	public function showNotice()
	{
		$this->load->model('noticias_model');

        $res1=$this->noticias_model->getNoticia(array('publicacion'=>$_GET['id']));

        $datos['title'] = 'NOTICIA';
        if ($res1->idTipos_Publicacion == 2) 
        {
        	$datos['titulo']=$res1->titulo;
	        $datos['descripcion']=$res1->descripcion;
	        $datos['fecha']=$res1->fecha;
	        $datos['portada']=$res1->portada;
        }

        if(isset($_GET['id']))
        {
			$ID = $_GET['id'];
		}
        
        $res2 = $this->noticias_model->getNoticias(array('publicacion'=>'noticias/1'));

        $cont = 0;
        $i = 0;
        while($cont != 1)
        { 
        	if ($res2[$i]->idPublicaciones == $ID && $i == 0) 
        	{
        		$datos['Ultima1'] = $res2[$i+1];
        		$datos['Ultima2'] = $res2[$i+2];
        		$datos['Ultima3'] = $res2[$i+3];
        		$cont++;
        	}
        	elseif ($res2[$i]->idPublicaciones == $ID && $i == 1) 
        	{
        		$datos['Ultima1'] = $res2[$i-1];
        		$datos['Ultima2'] = $res2[$i+1];
        		$datos['Ultima3'] = $res2[$i+2];
        		$cont++;
        	}
        	elseif($res2[$i]->idPublicaciones == $ID && $i == 2)
        	{
        		$datos['Ultima1'] = $res2[$i-2];
        		$datos['Ultima2'] = $res2[$i-1];
        		$datos['Ultima3'] = $res2[$i+1];
        		$cont++;
        	}
        	elseif ($res2[$i]->idPublicaciones == $ID && $i < count($res2)) 
        	{
        		$datos['Ultima1'] = $res2[$i-3];
        		$datos['Ultima2'] = $res2[$i-2];
        		$datos['Ultima3'] = $res2[$i-1];
        		$cont++;
        	}
        	$i++;
        }
		
		$this->loadView('public/noticia',$datos);
	}
}
