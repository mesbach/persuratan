<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class model_mail extends CI_model {

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
}
