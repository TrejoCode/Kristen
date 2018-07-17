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

}