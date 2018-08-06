<?php

//require_once '../core/M_model.php';

class EventosModel extends M_model
{
	public function getEventos($elements)
   {
   	 return $this->get('',$elements);
   }

   public function getEvento($elements)
   {
   	 return $this->get('',$elements);
   }
}