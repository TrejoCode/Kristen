<?php
/**
 * Created by PhpStorm.
 * User: Alumno
 * Date: 16/07/2018
 * Time: 10:40 AM
 */

class homeModel extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function getNoticias()
    {
        $this->db->select('*');
        $this->db->from('noticias');
        $res=$this->db->get();
        return $res->result();
    }

    public function getPlantas()
    {
        $this->db->select('*');
        $this->db->from('plantas');
        $res=$this->db->get();
        return $res->result();
    }
}