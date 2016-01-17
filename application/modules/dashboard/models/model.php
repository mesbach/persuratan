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
        $first = date('Y-m-01');
        $last = date('Y-m-t');
        $id = $this->session->userdata['logged_in']["id"];
        $sql = "select * from inbox  where inbox.parrent is null and (( inbox.tanggal_surat >= '$first' and inbox.tanggal_surat <= '$last' ) or (inbox.tanggal_terima >= '$first' and inbox.tanggal_terima <= '$last') )";
        return $this->query($sql);
    }
    function getOutbox() {
        $first = date('Y-m-01');
        $last = date('Y-m-t');
        $id = $this->session->userdata['logged_in']["id"];
        $sql = "select * from outbox where outbox.parrent is null and (( outbox.tanggal_surat >= '$first' and outbox.tanggal_surat <= '$last' ) or (outbox.tanggal_terima >= '$first' and outbox.tanggal_terima <= '$last') )";
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
    
    function getagenda(){
        $first = date('Y-m-01');
        $last = date('Y-m-t');
        $sql = "select * from agenda where (agenda.awal >= '$first' and agenda.awal <= '$last' ) or (agenda.akhir >= '$first' and agenda.akhir <= '$last' ) order by agenda.awal asc";
        return $this->query($sql);
    }
    
    function getagendatoday(){
        $tgl = date('Y-m-d');
        $sql = "select agenda.id, agenda.judul, date_format(agenda.awal, '%H:%i') as awal, date_format(agenda.akhir, '%H:%i') as akhir from agenda where date(agenda.awal) <= '$tgl' and date(agenda.akhir) >= '$tgl'  order by agenda.awal asc";
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
    
    function getUnreadmail()
    {
        $id = $this->session->userdata['logged_in']["id"];
        $sql = "select * from surat where surat.id not in 
        (select surat.id from surat inner join notifikasi on surat.id = notifikasi.surat where notifikasi.user = $id) and surat.parrent IS NULL";
        return $this->query($sql);
    }
        
    
}
