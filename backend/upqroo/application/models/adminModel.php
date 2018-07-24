<?php

class adminModel extends m_model
{

    public function getData($elements)
    {
        return $this->get('',$elements);
    }

    public function getPublicacion($id)
    {
        return $this->get('',array('publicacion'=>$id));
    }
}