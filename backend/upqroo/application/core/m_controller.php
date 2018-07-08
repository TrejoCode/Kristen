<?php

/**
 *
 */
class m_controller extends Ci_Controller
{

  //Revisa el estado del usuario (logueado=true, noLogueado=false)
  public function checkLogin()
  {
    //return status
  }

  //Envia peticion al web service, esperando una respuesta,
  //si la respuesta es positiva llena la variable de sesion
  public function login($user,$pass)
  {
    //return status
  }

  //Limpia las variables de sesion
  public function logout()
  {
    //return status
  }

  //Envia un post al webservice con la informacion necesaria para crear una enviarNotificacion
  //titulo
  //descripcion
  public function enviarNotificacion()
  {
    //return success
  }


  //Carga las vistas publicas
  public function loadView($view)
  {
      //$this->load->view('templates/header');
      $this->load->view($view);
      //$this->load->view('template/footer');
  }


  //Carga la vista de administrador
  public function loadViewAdmin($view)
  {

  }
}
?>