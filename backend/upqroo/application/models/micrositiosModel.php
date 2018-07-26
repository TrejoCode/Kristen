<?php

class micrositiosModel extends m_model
{

    public function getMicrositios($elements)
    {
        return $this->get('',$elements);
    }

    public function getData($elements)
   {
       return $data=$this->get('/publicacion/noticias/',$elements);
   }

   public function getDataT($table,$elements)
   {
       return $data2=$this->get($table,$elements);
   }
}