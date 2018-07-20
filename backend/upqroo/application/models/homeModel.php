<?php

//require_once '../core/m_model.php';

class homeModel extends m_model
{

   public function getElementBy($elements)
   {
       return $data=$this->get($elements);
   }


}