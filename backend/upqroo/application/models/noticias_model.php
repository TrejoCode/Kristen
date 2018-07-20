<?php

//require_once '../core/m_model.php';

class noticias_model extends m_model
{
	public function getNoticia($elements)
   {
   	 return $this->get($elements);
   }

   public function getNoticias($elements)
   {
   	 return $this->get($elements);
   }
}