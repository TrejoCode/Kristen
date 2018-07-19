<?php

//require_once '../core/m_model.php';

class evento_model extends m_model
{

   public function getEventos($elements)
   {
   	 return $this->get($elements);
   }

}