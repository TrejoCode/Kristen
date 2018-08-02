<?php

//require_once '../core/m_model.php';

class homeModel extends m_model
{

   public function getData($table,$elements)
   {
       return $data=$this->get($table,$elements);
   }


}