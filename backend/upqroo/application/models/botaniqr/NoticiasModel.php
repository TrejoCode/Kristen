<?php
/**
 * Created by PhpStorm.
 * User: Alumno
 * Date: 17/07/2018
 * Time: 10:20 AM
 */

class NoticiasModel extends CI_Model
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

    public function get_One($id)
    {
        $this->db->select('*');
        $this->db->from('noticias');
        $this->db->where('id',$id);
        $res=$this->db->get();

        return $res->result();
    }

}