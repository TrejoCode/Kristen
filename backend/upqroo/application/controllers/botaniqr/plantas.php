<?php
/**
 * Created by PhpStorm.
 * User: Alumno
 * Date: 17/07/2018
 * Time: 10:20 AM
 */

class plantas extends CI_Controller
{

    public function index()
    {
        $this->load->model('botaniqr/plantasModel');

        $this->load->helper('url');

        $data['plantas']=$this->plantasModel->getPlantas();

        $this->load->view('botaniqr/templates/header');
        $this->load->view('botaniqr/public/plantas',$data);
        $this->load->view('botaniqr/templates/footer');
    }

    public function showOne($id)
    {
        $this->load->model('botaniqr/plantasModel');

        $this->load->helper('url');

        $res = $this->plantasModel->get_One($id);

        $data['id'] = $res[0]->id;
        $data['codigo'] = $res[0]->codigo;
        $data['nombre'] = $res[0]->nombre;
        $data['cientifico'] = $res[0]->cientifico;
        $data['descripcion'] = $res[0]->descripcion;
        $data['taxonomia'] = $res[0]->taxonomia;
        $data['aplicaciones'] = $res[0]->aplicaciones;
        $data['imagen'] = $res[0]->imagen;
        $data['qr'] = $res[0]->qr;

        $this->load->view('botaniqr/templates/header');
        $this->load->view('botaniqr/public/planta', $data);
        $this->load->view('botaniqr/templates/footer');
    }

}
