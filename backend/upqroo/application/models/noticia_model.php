<?php

//require_once '../core/m_model.php';

class noticia_model extends m_model
{

   public function getNoticias($elements)
   {
   	 return $this->get($elements);
   }

}