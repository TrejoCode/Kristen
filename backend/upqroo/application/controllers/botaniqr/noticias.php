<?php
/**
 * Created by PhpStorm.
 * User: Alumno
 * Date: 17/07/2018
 * Time: 10:10 AM
 */

class Noticias extends CI_Controller
{

    public function index()
    {
        $this->load->model('botaniqr/noticiasModel');

        $this->load->helper('url');

        $this->load->view('botaniqr/templates/header');
        $this->load->view('botaniqr/public/noticias');
        $this->load->view('botaniqr/templates/footer');
    }

    public function showOne($id)
    {
        $this->load->model('botaniqr/noticiasModel');

        $this->load->helper('url');

        $res = $this->noticiasModel->get_One($id);

        $date['id'] = $id;
        $data['nombre'] = $res[0]->nombre;
        $data['fecha'] = $res[0]->fecha;
        $data['imagen'] = $res[0]->imagen;
        $data['descripcion'] = $res[0]->descripcion;
        $data['contenido'] = $res[0]->contenido;

        $this->load->view('botaniqr/templates/header');
        $this->load->view('botaniqr/public/noticia', $data);
        $this->load->view('botaniqr/templates/footer');
    }

}
