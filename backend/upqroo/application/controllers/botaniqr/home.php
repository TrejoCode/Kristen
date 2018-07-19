<?php
/**
 * Created by PhpStorm.
 * User: Alumno
 * Date: 16/07/2018
 * Time: 10:36 AM
 */

class home extends CI_Controller
{

    public function index()
    {

        $this->load->model('botaniqr/homeModel');

        $this->load->helper('url');

        $this->load->view('botaniqr/templates/header');
        $this->load->view('botaniqr/public/home');
        $this->load->view('botaniqr/templates/footer');

    }

    public function login()
    {
        $this->load->helper('url');

        $this->load->view('botaniqr/public/login');
    }

}