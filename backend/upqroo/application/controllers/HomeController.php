<?php

class HomeController extends M_controller
{

	//Se asigna el data a la vista home , regresa toda la información
	public function index(){

        $this->load->model('HomeModel');

		$data['noticias'] =$this->HomeModel->getData('/publicacion',array('noticias'=>1));
		$data['carrera'] = $this->HomeModel->getData('',array('carrera'=>''));
		$data['evento'] =$this->HomeModel->getData('/publicacion',array('eventos'=>1));
		$data['title']='HOME';
		//var_dump($data['noticias']);
		$this->loadView('public/home' , $data);
	}


	public function entrar()
    {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'usuario', 'required');
        $this->form_validation->set_rules('password', 'contraseña', 'required');
        $data['title']='LOGIN';

        if ($this->form_validation->run() === FALSE)
        {
            $this->loadView('public/login',$data);
        }
        else
        {
            $username = $this->input->post('email');
            $password = $this->input->post('password');
            $resultado=$this->login($username,$password);

            if($resultado!='404')
            {
                redirect(base_url().'index.php/administrador');
            }
            else
            {
                redirect(base_url().'index.php/login');
            }
        }
    }


    public function salir()
    {
        $this->logout();
        redirect(base_url());
    }


}