<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class model extends CI_model {

    function __construct() {
        parent::__construct();
    }

    function getNofication() {
        $sql = 'select * from   notif';
        return $this->query($sql);
    }
    function getInbox($days) {
        $sql = 'select * from inbox where  tanggal_surat > NOW() - INTERVAL '.$days.' DAY';
        
        return $this->query($sql, $days);
    }
    function getOutbox($days) {
        $sql = 'select * from outbox where  tanggal_surat > NOW() - INTERVAL '.$days.' DAY';
        return $this->query($sql, $days);
    }
    function getDraft(){
        $sql = 'select * from draft';
        return $this->query($sql);   
    }
    function getMail($id){
        $sql = 'select *,DATE_FORMAT(surat.tanggal_surat,"%d %M %Y") as "tanggal" from surat where id='.$id;
        return $this->query($sql);      
    }
    function readMail($id){
        $data = array(
               'isread' => 1,
               'isopen' => 1
            );

        $this->db->where('id', $id);
        $this->db->update('surat', $data); 
        //$this->query($sql);
    }
}
