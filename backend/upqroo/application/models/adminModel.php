<?php

class adminModel extends m_model
{

    public function getNoticias($elements)
    {
        $result=$this->get('',$elements);
        return $result;
    }

    public function getEventos($elements)
    {
        $result=$this->get('',$elements);
        return $result;
    }

    public function getTrabajos($elements)
    {
        $result=$this->get('',$elements);
        return $result;
    }

    public function getPaginas($elements)
    {
        $result=$this->get('',$elements);
        return $result;
    }

    public function getUsuarios($elements)
    {
        $result=$this->get('',$elements);
        return $result;
    }
}