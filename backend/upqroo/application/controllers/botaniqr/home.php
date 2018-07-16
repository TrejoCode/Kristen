<?php
/**
 * Created by PhpStorm.
 * User: Alumno
 * Date: 16/07/2018
 * Time: 10:36 AM
 */

class home extends CI_Controller
{

    public function __construct()
    {
        $this->load->model('homeModel');
        $this->load->helper('url','form');
    }

    public function index()
    {

        $this->load->view('botanicqr/templates/header');
        $this->load->view('botanicqr/public/home');
        $this->load->view('botanicqr/templates/footer');

    }

}