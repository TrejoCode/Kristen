<?php

//require_once '../core/M_model.php';

class NoticiasModel extends M_model
{
	public function getNoticia($elements)
   {
   	 return $this->get('',$elements);
   }

   public function getNoticias($elements)
   {
   	 return $this->get('',$elements);
   }
}