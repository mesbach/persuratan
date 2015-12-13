<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class searchmodel extends CI_model {
    
    function __construct() {
        parent::__construct();
    }
    
    function getquery($teksql) {
        $sql = $teksql;
        $result = $this->query($sql);
        return $result;
    }
    
}