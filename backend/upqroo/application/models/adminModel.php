<?php

class adminModel extends m_model
{

    public function getData($elements)
    {
        return $this->get('',$elements);
    }

}