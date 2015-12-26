<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class model_agenda extends CI_model {

    function __construct() {
        parent::__construct();
    }
    function agenda(){
        $id = $this->session->userdata['logged_in']["id"];
        $sql = "select *, if(agenda.awal > now(),'disetujui',if(agenda.akhir>now(),'berjalan','selesai')) as 'status' from agenda order by agenda.awal asc";
        return $this->query($sql);
    }
    function calagenda(){
        $sql = "select agenda.judul as 'title', agenda.awal as 'start', agenda.akhir as 'end'
from agenda ";
        return $this->query($sql);
    }
    function pendamping(){
     $sql = "select * from pendamping";
        return $this->query($sql);   
    }
    
    function getdetailagenda($id)
    {
        $this->db->where('id',$id);
        $hasil = $this->db->get('agenda');
        return $hasil->result();
    }
    
    function getpendamping($idagenda)
    {
        $this->db->where('agenda',$idagenda);
        $hasil = $this->db->get('pendamping');
        return $hasil->result();
    }
    
    function getsatpassus($idagenda)
    {
        $this->db->where('agenda',$idagenda);
        $hasil = $this->db->get('satpassus');
        return $hasil->result();
    }
    
    function getrundown($idagenda)
    {
        $this->db->where('agenda',$idagenda);
        $hasil = $this->db->get('rundown');
        return $hasil->result();
    }
    
    function updateverify($id,$flag)
    {
        $data = array( 'verifikasi' => $flag );
        $this->db->where('id',$id);
        $this->db->update('agenda',$data);
    }
    
    function updateAgenda($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('agenda',$data);
    }
    
    function delpendamping($idagenda)
    {
        $this->db->where('agenda',$idagenda);
        $this->db->delete('pendamping');
    }
    
    function delsatpassus($idagenda)
    {
        $this->db->where('agenda',$idagenda);
        $this->db->delete('satpassus');
    }
    
    function delrundown($idagenda)
    {
        $this->db->where('agenda',$idagenda);
        $this->db->delete('rundown');
    }
}
