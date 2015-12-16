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
        $sql = "select tamu.id, tamu.nama, tamu.waktu, tamu.telp, tamu.keterangan from tamu";
        return $this->query($sql);
    }
    function insertTamu(){
        $sql = "";
    }
    
}
