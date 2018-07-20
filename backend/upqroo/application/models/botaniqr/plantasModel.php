<?php
/**
 * Created by PhpStorm.
 * User: Alumno
 * Date: 17/07/2018
 * Time: 10:40 AM
 */

class plantasModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getPlantas()
    {
        $this->db->select('*');
        $this->db->from('plantas');
        $res=$this->db->get();
        return $res->result();
    }

    public function get_One($id)
    {
        $this->db->select('*');
        $this->db->from('plantas');
        $this->db->where('id',$id);
        $res=$this->db->get();

        return $res->result();
    }
}