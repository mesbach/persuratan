<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class model_setting extends CI_model {

    function __construct() {
        parent::__construct();
    }

    function getadmin() {
        $sql = "select * from admin left join akses on admin.kode = akses.id order by akses.akses asc";
        $this->db->query($sql);
//        $this->db->where('idadmin',$id);
//        $temp = $this->db->get('admin');
        $temp = $this->db->query($sql);
        return $temp->result();
    }
    
    function updateProfile($id,$data)
    {
        $this->db->where('idadmin',$id);
        $this->db->update('admin',$data);
    }
    
    function getAkses()
    {
        $temp = $this->db->get('akses');
        return $temp->result();
    }
    
    function adduser($data)
    {
        $this->db->insert('admin',$data);
    }
}
