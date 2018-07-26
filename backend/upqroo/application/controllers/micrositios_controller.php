<?php
/**
 * Created by PhpStorm.
 * User: Alumno
 * Date: 25/07/2018
 * Time: 11:24 AM
 */

class micrositios_Controller extends m_controller
{

    public function index()
    {
        /*switch ($id) {
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
        }*/
        $this->load->model('micrositiosModel');

        $numPag = 2;
        $res=$this->micrositiosModel->getMicrositios(array('infoinstitucional/' => 2));
        $datos['Datos']=$res;
        if (!empty($res)) {
            
            $datos['titulo']=$res->titulo;
        }

        $this->loadView('public/micrositios',$datos);
    }

    //1
    public function getBiotecnologia()
    {
        $data['title']='Ing en Biotecnologia';
        $this->loadView('public/micrositios',$data);
    }

    //2
    public function getSoftware()
    {
        $data['title']='Ing en Software';
        $this->loadView('public/micrositios',$data);
    }

    //3
    public function getBiomedica()
    {
        $data['title']='Ing en Biomedica';
        $this->loadView('public/micrositios',$data);
    }

    //4
    public function getPymes()
    {
        $data['title']='Lic en Gestion de Pymes';
        $this->loadView('public/micrositios',$data);

    }

    //5
    public function getFinanciera()
    {
        $data['title']='Lic en Gestion de Pymes';
        $this->loadView('public/micrositios',$data);
    }

    //6
    public function getTerapia()
    {

    }

}