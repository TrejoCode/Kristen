<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends m_controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->model('exampleModel');

        //$res=array();
        $res=$this->exampleModel->getElementBy(array('carrera'=>'1'));
        $data['carrera']=$res->nombre;
        $data['title']='LOGIN';

        if(!isset($_SESSION['tipoUsuario']))
        {
            $this->loadView('public/login',$data);
        }
	}

	public function logoutE()
    {
        $this->logout();
        redirect(base_url());
    }

	public function loginE()
    {

        $username = $this->input->post('email');
        $password = $this->input->post('password');
        $resultado=$this->login($username,$password);

        if($resultado!='404')
        {
            redirect(base_url().'index.php/administrador');
            /*if($_SESSION['tipoUsuario']==1)
            {
                //Director de carrera
                redirect(base_url().'index.php/administrador');
            }
            if($_SESSION['tipoUsuario']==2)
            {
                //Vinculacion
                redirect(base_url().'index.php/administrador');
            }
            if($_SESSION['tipoUsuario']==3)
            {
                //Servicios escolares
                redirect(base_url().'index.php/administrador');
            }
            if($_SESSION['tipoUsuario']==4)
            {
                //Prensa y difucion
                redirect(base_url().'index.php/administrador');
            }
            if ($_SESSION['tipoUsuario']==5)
            {
                //Administrador web
                redirect(base_url().'index.php/administrador');
            }*/
        }
        else
        {
            echo 'login failed';
        }
    }
}
