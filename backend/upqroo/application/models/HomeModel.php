<?php

//require_once '../core/M_model.php';

class HomeModel extends M_model
{

   public function getData($table,$elements)
   {
       return $data=$this->get($table,$elements);
   }


}