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
        $sql = "select * from inbox";
        return $this->query($sql);
    }
    function getOutbox() {
        $id = $this->session->userdata['logged_in']["id"];
        $sql = "select * from outbox";
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
        $sql = "select * from memo left join admin on (memo.admin_idadmin=admin.idadmin) where memo.surat=$id order by memo.tanggal asc";
        return $this->query($sql);
    }
    function readMail($idsurat){
        $id = $this->session->userdata['logged_in']["id"];
        $sql = "select * from notifikasi where surat=$idsurat & user=$id";
        $rest = $this->query($sql,array($idsurat,$id));
        if(count($rest)==0){
            $data = array(
               'user' => $id,
               'surat' => $idsurat,
               'isread' => 1
            );
            $this->db->insert('notifikasi', $data); 
        }
    }
}
