<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EventosController extends M_controller {

	public function index()
	{
                $this->load->model('EventosModel');

                $numPag = 1;
                $res=$this->EventosModel->getEventos(array('publicacion'=>'eventos/'.$numPag.''));
                $numPag++;

                $respag=$this->EventosModel->getEventos(array('publicacion'=>'eventos/'.$numPag.''));
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
                $this->load->model('EventosModel');

                //$Pagina++;

                $resp=$this->EventosModel->getEventos(array('publicacion'=>'eventos/'.$Pagina));

                $Pagina++;

                $r=$this->EventosModel->getEventos(array('publicacion'=>'eventos/'.$Pagina));

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
		$this->load->model('EventosModel');

        $res1=$this->EventosModel->getEvento(array('publicacion'=>$id));

        $datos['title'] = 'EVENTO';
        if ($res1->idTipos_Publicacion == 1) 
        {
        	$datos['titulo']=$res1->titulo;
	        $datos['descripcion']=$res1->descripcion;
	        $datos['fecha']=$res1->fecha;
	        $datos['portada']=$res1->portada;
        }
		

                $ID = $id;
                
                $res2 = $this->EventosModel->getEventos(array('publicacion'=>'eventos/1'));

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