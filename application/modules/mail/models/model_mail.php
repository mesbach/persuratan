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
        $sql = "select * from inbox where inbox.parrent is null";
        return $this->query($sql);
    }
    function getOutbox() {
        $id = $this->session->userdata['logged_in']["id"];
        $sql = "select * from outbox where outbox.parrent is null";
        return $this->query($sql);
    }
    
    function getjurnal(){
        $sql = "select jurnal from surat 
                where surat.isdraft = 0 and surat.jenis_surat = 'in'
                order by surat.id desc limit 1";
        return $this->query($sql);
    }
    
    function getDraft(){
        $sql = 'select * from draft';
        return $this->query($sql);   
    }
    function getMail($id){
        $sql = 'select surat.*,DATE_FORMAT(surat.tanggal_surat,"%d %M %Y") as "tanggal", admin.nama as "nama_admin" from surat left join admin on surat.idadmin = admin.idadmin where surat.id='.$id;
        return $this->query($sql);      
    }
    function getMemo($id){
        $sql = "select * from memo left join admin on (memo.admin_idadmin=admin.idadmin) where memo.surat=$id order by memo.tanggal asc";
        return $this->query($sql);
    }
    function readMail($idsurat){
        $id = $this->session->userdata['logged_in']["id"];
        $sql = "select * from notifikasi where surat=$idsurat and user=$id";
        $rest = $this->query($sql,array($idsurat,$id));
        if(empty($rest)){
            $data = array(
               'user' => $id,
               'surat' => $idsurat,
               'isread' => 1
            );
            $this->db->insert('notifikasi', $data); 
        }
    }
    
    function editMail($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('surat',$data);
    }
    
    function getmailparent($id)
    {
        $sql = "select surat.parrent from surat where surat.id = $id";
        return $this->query($sql);
    }
    
    function getmailversion($id)
    {
        $sql = "select * from surat left join admin on surat.idadmin = admin.idadmin where surat.id = $id or surat.parrent = $id order by surat.id asc";
        return $this->query($sql);
    }
    
    function getmailversion2($id,$idparent)
    {
        $sql = "select * from surat left join admin on surat.idadmin = admin.idadmin where surat.id = $id or surat.parrent = $idparent or surat.id = $idparent order by surat.id asc";
        return $this->query($sql);
    }
    
    function disabledraft($idsurat)
    {
        $data['isdraft'] = 0;
        $this->db->where('id',$idsurat);
        $this->db->update('surat',$data);
    }
    
    function enabledraft($idsurat)
    {
        $data['isdraft'] = 0;
        $this->db->where('id',$idsurat);
        $this->db->update('surat',$data);
    }
    
    function updatesurat($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('surat',$data);
    }
}
