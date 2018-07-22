<?php

class homeController extends m_controller
{

	//Se asigna el data a la vista home , regresa toda la información
	public function index(){

        $this->load->model('homeModel');

		$data['noticias'] = $this->getNews();
		$data['carrera'] = $this->getCareer();
		$data['evento'] = $this->getEvent();
		$this->loadView('public/home' , $data);

	}


	//Obtener Noticias 
   private function getNews()
   {
   	 return $this->homeModel->get('/publicacion',array('noticias' => '1'));
   }


   	//Obtener Carrera
   private function getCareer()
   {
   	return $this->homeModel->get('',array('carrera' => ''));
   }


   //Obtener Evento
   private function getEvent()
   {

   	return $this->homeModel->get('/publicacion',array('eventos' => '1'));
   }



}