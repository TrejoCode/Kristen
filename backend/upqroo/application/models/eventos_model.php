<?php

//require_once '../core/m_model.php';

class eventos_model extends m_model
{
	public function getEventos($elements)
   {
   	 return $this->get($elements);
   }

   public function getEvento($elements)
   {
   	 return $this->get($elements);
   }
}