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
        $sql = "select *, if(agenda.awal > now(),'disetujui',if(agenda.akhir>now(),'berjalan','selesai')) as 'status' from agenda ";
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
}
