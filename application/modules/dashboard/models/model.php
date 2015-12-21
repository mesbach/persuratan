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
        $id = $this->session->userdata['logged_in']["id"];
        $sql = "select * from notif where idadmin=$id";
        return $this->query($sql);
    }
    function getInbox() {
        $id = $this->session->userdata['logged_in']["id"];
        $sql = "select * from inbox where idadmin=$id";
        return $this->query($sql);
    }
    function getOutbox() {
        $id = $this->session->userdata['logged_in']["id"];
        $sql = "select * from outbox where idadmin=$id";
        return $this->query($sql);
    }
    function getDraft(){
        $sql = 'select * from draft';
        return $this->query($sql);   
    }
    function getMail($id){
        $sql = 'select *,DATE_FORMAT(surat.tanggal_surat,"%d %M %Y") as "tanggal" from surat where id='.$id;
        return $this->query($sql);      
    }
    function getMemo($id){
        $sql = "select * from memo where surat=$id order by tanggal asc";
        return $this->query($sql);
    }
    function readMail($idsurat){
        $id = $this->session->userdata['logged_in']["id"];

        $data = array(
               'user' => $id,
               'surat' => $idsurat,
               'isread' => 1
            );
        $this->db->insert('notifikasi', $data); 
        //$this->query($sql);
    }
    
    //hitung jumlah tamu bulan ini
    function countguest()
    {
        $first = date('Y-m-01');
        $last = date('Y-m-t');
        $sql = "select count(tamu.id) as jml from tamu where tamu.waktu >= '$first' and tamu.waktu <= '$last'";
        
        return $this->query($sql);
    }
        
    
}
