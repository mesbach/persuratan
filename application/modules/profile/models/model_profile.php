<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class model_profile extends CI_model {

    function __construct() {
        parent::__construct();
    }

    function getadmin_byid($id) {
        $sql = "select * from admin left join akses on admin.kode = akses.id where admin.idadmin = $id";
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

}
