<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class model_tamu extends CI_model {

    function __construct() {
        parent::__construct();
    }
    
    function getTamu(){
        $sql = "select tamu.id, tamu.nama, tamu.waktu, tamu.telp, tamu.keterangan, tamu.verifikasi from tamu";
        return $this->query($sql);
    }    
   
    //tamu dari 1 minggu lalu ke depan
    function gettamu2(){
        $date = date('Y-m-d', strtotime("- 14 day"));
        $sql = "select tamu.id, tamu.nama, tamu.waktu, tamu.telp, tamu.keterangan, tamu.verifikasi from tamu where tamu.waktu >= '".$date."'";
        return $this->query($sql);
    }
    
    function gettamudetail($id)
    {
        $this->db->where('id',$id);
        $result = $this->db->get('tamu');
        return $result->result();
    }
    
    function insertTamu(){
        $sql = "";
    }
    
    function update($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('tamu',$data);
    }
    
    function updateverify($id,$flag)
    {
        $data = array( 'verifikasi' => $flag );
        $this->db->where('id',$id);
        $this->db->update('tamu',$data);
    }
    
}
