<?php
/**
 * Created by PhpStorm.
 * User: Alumno
 * Date: 25/07/2018
 * Time: 11:24 AM
 */

class micrositios_Controller extends m_controller
{

    public function index($id)
    {
        switch ($id) {
            case 1:
                $this->getBiotecnologia();
                break;
            case 2:
                $this->getSoftware();
                break;
            case 3:
                $this->getBiomedica();
                break;
            case 4:
                $this->getPymes();
                break;
            case 5:
                $this->getFinanciera();
                break;
            case 6:
                $this->getTerapia();
                break;
        }
    }

    //1
    public function getBiotecnologia()
    {
        $this->load->model('micrositiosModel');

        $res=$this->micrositiosModel->getMicrositios(array('infoinstitucional' => 2));

        if (!empty($res)) {
            $datos['Datos']=$res;
            $datos['title']='Ing en Biotecnología';
            $datos['titulo']=$res->titulo;
            $datos['portada']=$res->portada;
            $datos['resumen']=$res->contenidos[0]->contenido->texto;
            $datos['objetivo']=$res->contenidos[1]->contenido->texto;
            $datos['duracion']=$res->contenidos[2]->contenido->texto;
            $datos['habilidad1']=$res->contenidos[3]->contenido->texto;
            $datos['habilidad2']=$res->contenidos[4]->contenido->texto;
            $datos['habilidad3']=$res->contenidos[5]->contenido->texto;
            $datos['habilidad4']=$res->contenidos[5]->contenido->texto;
        }

        $datos['noticias'] =$this->micrositiosModel->getData(array(2=>1));
        //var_dump($datos['noticias']);
        $datos['evento'] =$this->micrositiosModel->getData(array(2=>1));

        $this->loadView('public/micrositios',$datos);
    }

    //2
    public function getSoftware()
    {
        $this->load->model('micrositiosModel');

        $res=$this->micrositiosModel->getMicrositios(array('infoinstitucional' => 3));

        if (!empty($res)) {
            $datos['Datos']=$res;
            $datos['title']='Ing en Software';
            $datos['titulo']=$res->titulo;
            $datos['portada']=$res->portada;
            $datos['resumen']=$res->contenidos[0]->contenido->texto;
            $datos['objetivo']=$res->contenidos[1]->contenido->texto;
            $datos['duracion']=$res->contenidos[2]->contenido->texto;
            $datos['habilidad1']=$res->contenidos[4]->contenido->texto;
            $datos['habilidad2']=$res->contenidos[5]->contenido->texto;
            $datos['habilidad3']=$res->contenidos[6]->contenido->texto;
            $datos['habilidad4']=$res->contenidos[7]->contenido->texto;
        }

        $datos['noticias'] =$this->micrositiosModel->getData(array(3=>1));
        $datos['evento'] =$this->micrositiosModel->getData(array(3=>1));
        //var_dump($datos['noticias']);

        $this->loadView('public/micrositios',$datos);
    }

    //3
    public function getBiomedica()
    {
        $this->load->model('micrositiosModel');

        $res=$this->micrositiosModel->getMicrositios(array('infoinstitucional' => 7));

        if (!empty($res)) {
            $datos['Datos']=$res;
            $datos['title']='Ing en Biomedica';
            $datos['titulo']=$res->titulo;
            $datos['portada']=$res->portada;
            $datos['resumen']=$res->contenidos[0]->contenido->texto;
            $datos['objetivo']=$res->contenidos[1]->contenido->texto;
            $datos['duracion']=$res->contenidos[2]->contenido->texto;
            $datos['habilidad1']=$res->contenidos[4]->contenido->texto;
            $datos['habilidad2']=$res->contenidos[5]->contenido->texto;
            $datos['habilidad3']=$res->contenidos[6]->contenido->texto;
            $datos['habilidad4']=$res->contenidos[7]->contenido->texto;
        }
        
        $datos['noticias'] =$this->micrositiosModel->getData(array(7=>1));
        $datos['evento'] =$this->micrositiosModel->getData(array(7=>1));

        $datos2['trabajos']=$this->micrositiosModel->getDataT('/publicacion',array('trabajos'=>1));
        if ($datos2['trabajos']->idUsuarios == 7) {
            $datos['trabajos']=$this->micrositiosModel->getDataT('/publicacion',array('trabajos'=>1));
        }
        //var_dump($datos['trabajos']);
        //tengo que sacar la informacion de trabajos, REVISAR BIEN LA ESTRUCTURA DE AQUÍ ARRIBA
        

        $this->loadView('public/micrositios',$datos);
    }

    //4
    public function getPymes()
    {
        $this->load->model('micrositiosModel');

        $res=$this->micrositiosModel->getMicrositios(array('infoinstitucional' => 5));

        if (!empty($res)) {
            $datos['Datos']=$res;
            $datos['title']='Ing en Administración y Gestión de Py';
            $datos['titulo']=$res->titulo;
            $datos['portada']=$res->portada;
            $datos['resumen']=$res->contenidos[0]->contenido->texto;
            $datos['objetivo']=$res->contenidos[1]->contenido->texto;
            $datos['duracion']=$res->contenidos[2]->contenido->texto;
            $datos['habilidad1']=$res->contenidos[4]->contenido->texto;
            $datos['habilidad2']=$res->contenidos[5]->contenido->texto;
            $datos['habilidad3']=$res->contenidos[6]->contenido->texto;
            $datos['habilidad4']=$res->contenidos[7]->contenido->texto;
        }

        $datos['noticias'] =$this->micrositiosModel->getData(array(5=>1));
        $datos['evento'] =$this->micrositiosModel->getData(array(5=>1));
        $this->loadView('public/micrositios',$datos);

    }

    //5
    public function getFinanciera()
    {
        $this->load->model('micrositiosModel');

        $res=$this->micrositiosModel->getMicrositios(array(4=>1));

        if (!empty($res)) {
            $datos['Datos']=$res;
            $datos['title']='Ing en Financiera';
            $datos['titulo']=$res->titulo;
            $datos['portada']=$res->portada;
            $datos['resumen']=$res->contenidos[0]->contenido->texto;
            $datos['objetivo']=$res->contenidos[1]->contenido->texto;
            $datos['duracion']=$res->contenidos[2]->contenido->texto;
            $datos['habilidad1']=$res->contenidos[4]->contenido->texto;
            $datos['habilidad2']=$res->contenidos[5]->contenido->texto;
            $datos['habilidad3']=$res->contenidos[6]->contenido->texto;
            $datos['habilidad4']=$res->contenidos[7]->contenido->texto;
        }

        $datos['noticias'] =$this->micrositiosModel->getData(array(4=>1));
        $datos['evento'] =$this->micrositiosModel->getData(array(4=>1));
        $this->loadView('public/micrositios',$datos);
    }

    //6
    public function getTerapia()
    {
        $this->load->model('micrositiosModel');

        $res=$this->micrositiosModel->getMicrositios(array('infoinstitucional' => 6));

        if (!empty($res)) {
            $datos['Datos']=$res;
            $datos['title']='Ing en Terapia Física';
            $datos['titulo']=$res->titulo;
            $datos['portada']=$res->portada;
            $datos['resumen']=$res->contenidos[0]->contenido->texto;
            $datos['objetivo']=$res->contenidos[1]->contenido->texto;
            $datos['duracion']=$res->contenidos[2]->contenido->texto;
            $datos['habilidad1']=$res->contenidos[4]->contenido->texto;
            $datos['habilidad2']=$res->contenidos[5]->contenido->texto;
            $datos['habilidad3']=$res->contenidos[6]->contenido->texto;
            $datos['habilidad4']=$res->contenidos[7]->contenido->texto;
        }

        $datos['noticias'] =$this->micrositiosModel->getData(array(6=>1));
        $datos['evento'] =$this->micrositiosModel->getData(array(6=>1));
        $this->loadView('public/micrositios',$datos);
    }

}