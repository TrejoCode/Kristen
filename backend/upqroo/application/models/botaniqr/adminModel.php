<?php

/**
 * Created by PhpStorm.
 * User: LuisAnc
 * Date: 02/08/2018
 * Time: 04:27 PM
 */
class adminModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function login($user,$pass)
    {
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('email',$user);
        $this->db->where('password',$pass);
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