<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class eventos_controller extends m_controller {

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
                $this->load->model('eventos_model');

                $numPag = 1;
                $res=$this->eventos_model->getEventos(array('publicacion'=>'eventos/'.$numPag.''));
                $numPag++;

                $respag=$this->eventos_model->getEventos(array('publicacion'=>'eventos/'.$numPag.''));
                $numPag = 1;

                //echo $respag->error->status;
                if (empty($respag)) 
                {
                        $datos['Datos'] = $res;
                        $datos['title'] = 'EVENTOS';
                        $datos['nump'] = 0;
                }
                else
                {
                        $datos['Datos'] = $res;
                        $datos['title'] = 'EVENTOS';
                        $datos['nump'] = 1;
                }
        		
        		$this->loadView('public/eventos',$datos);
        }

        public function paginaEvento($Pagina)
        {
                $this->load->model('eventos_model');

                //$Pagina++;

                $resp=$this->eventos_model->getEventos(array('publicacion'=>'eventos/'.$Pagina));

                $Pagina++;

                $r=$this->eventos_model->getEventos(array('publicacion'=>'eventos/'.$Pagina));

                $Pagina = $Pagina - 1;

                if (empty($r))
                {
                        $datos['Datos'] = $resp;
                        $datos['title'] = 'EVENTOS';
                        $datos['Anterior'] = "Anterior";
                        $datos['nump'] = $Pagina;
                        }
                        else
                {
                        $datos['Datos'] = $resp;
                        $datos['title'] = 'EVENTOS';
                        $datos['nump'] = $Pagina;
                }

                $this->loadView('public/eventos',$datos);
        }


	public function showEvento($id)
	{
		$this->load->model('eventos_model');

        $res1=$this->eventos_model->getEvento(array('publicacion'=>$id));

        $datos['title'] = 'EVENTO';
        if ($res1->idTipos_Publicacion == 1) 
        {
        	$datos['titulo']=$res1->titulo;
	        $datos['descripcion']=$res1->descripcion;
	        $datos['fecha']=$res1->fecha;
	        $datos['portada']=$res1->portada;
        }
		

                $ID = $id;
                
                $res2 = $this->eventos_model->getEventos(array('publicacion'=>'eventos/1'));

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

		$this->loadView('public/evento',$datos);
	}
}