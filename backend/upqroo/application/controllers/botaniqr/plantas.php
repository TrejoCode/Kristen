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
        $this->load->model('botaniqr/homeModel');

        $this->load->helper('url');

        $this->load->view('botaniqr/templates/header');
        $this->load->view('botaniqr/public/plantas');
        $this->load->view('botaniqr/templates/footer');
    }

    public function showOne($id)
    {
        $this->load->model('botaniqr/plantasModel');

        $this->load->helper('url');

        $res = $this->plantasModel->get_One($id);

        $data['nombre'] = $res[0]->nombre;
        $data['cientifico'] = $res[0]->cientifico;
        $data['descripcion'] = $res[0]->descripcion;
        $data['taxonomia'] = $res[0]->taxonomia;
        $data['aplicaciones'] = $res[0]->aplicaciones;
        $data['imgUrl'] = $res[0]->imagen;

        $this->load->view('botaniqr/templates/header');
        $this->load->view('botaniqr/public/planta', $data);
        $this->load->view('botaniqr/templates/footer');
    }

}