<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NoticiasController extends M_controller {

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
        $this->load->model('NoticiasModel');

        $numPag = 1;
        $res=$this->NoticiasModel->getNoticias(array('publicacion'=>'noticias/'.$numPag.''));
        $numPag++;

        $respag=$this->NoticiasModel->getNoticias(array('publicacion'=>'noticias/'.$numPag.''));
        $numPag = 1;

        //echo $respag->error->status;
        if (empty($respag)) 
        {
        	$datos['Datos'] = $res;
	        $datos['title'] = 'NOTICIAS';
	        $datos['Anterior'] = 2;
        	$datos['nump'] = 0;
        }
        else
        {
        	$datos['Datos'] = $res;
	        $datos['title'] = 'NOTICIAS';
	        $datos['Anterior'] = 2;
	        $datos['nump'] = 1;	
        }

        $this->loadView('public/noticias',$datos);
	}

	public function paginaNoticia($Pagina)
	{
        $this->load->model('NoticiasModel');

        //$Pagina++;

        $resp=$this->NoticiasModel->getNoticias(array('publicacion'=>'noticias/'.$Pagina));

        $Pagina++;

        $r=$this->NoticiasModel->getNoticias(array('publicacion'=>'noticias/'.$Pagina));

        $Pagina = $Pagina - 1;

        if (empty($r))
        {
        	$datos['Datos'] = $resp;
	        $datos['title'] = 'NOTICIAS';
        	$datos['Anterior'] = 0;
        	$datos['nump'] = $Pagina;
		}
		else
        {
        	$datos['Datos'] = $resp;
	        $datos['title'] = 'NOTICIAS';
	        $datos['Anterior'] = 1;
	        $datos['nump'] = $Pagina;
        }

        $this->loadView('public/noticias',$datos);
	}

	public function showNotice($idPNoticia, $idPNoticias)
	{
		$this->load->model('NoticiasModel');

		if ($idPNoticia == 0 || empty($idPNoticia)) 
		{
			redirect(base_url().'index.php/noticias');
		}
		else
		{
	        if ($idPNoticias == 0) 
	        {
	        	$idPNoticias == 1;
	        }

			$res1=$this->NoticiasModel->getNoticia(array('publicacion'=>$idPNoticia));

	        $datos['title'] = 'NOTICIA';
	        if ($res1->idTipos_Publicacion == 2) 
	        {
	        	$datos['titulo']=$res1->titulo;
		        $datos['descripcion']=$res1->descripcion;
		        $datos['fecha']=$res1->fecha;
		        $datos['portada']=$res1->portada;
	        }

	        $res2 = $this->NoticiasModel->getNoticias(array('publicacion'=>'noticias/'.$idPNoticias));

	        $cont = 0;
	        $i = 0;
	        while($cont != 1)
	        { 
	        	if ($res2[$i]->idPublicaciones == $idPNoticia && $i == 0) 
	        	{
	        		$datos['Ultima1'] = $res2[$i+1];
	        		$datos['Ultima2'] = $res2[$i+2];
	        		$datos['Ultima3'] = $res2[$i+3];
	        		$cont++;
	        	}
	        	elseif ($res2[$i]->idPublicaciones == $idPNoticia && $i == 1) 
	        	{
	        		$datos['Ultima1'] = $res2[$i-1];
	        		$datos['Ultima2'] = $res2[$i+1];
	        		$datos['Ultima3'] = $res2[$i+2];
	        		$cont++;
	        	}
	        	elseif($res2[$i]->idPublicaciones == $idPNoticia && $i == 2)
	        	{
	        		$datos['Ultima1'] = $res2[$i-2];
	        		$datos['Ultima2'] = $res2[$i-1];
	        		$datos['Ultima3'] = $res2[$i+1];
	        		$cont++;
	        	}
	        	elseif ($res2[$i]->idPublicaciones == $idPNoticia && $i < count($res2)) 
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
}
