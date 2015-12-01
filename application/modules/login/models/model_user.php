<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class model_user extends CI_model {

    function __construct() {
        parent::__construct();
    }

    function getAdminByUsername($username) {
        $sql = 'select * from admin where admin.username=?';
        return $this->query($sql, array($username));
    }

    function login($username, $password) {
        $sql = 'select * from admin where admin.username= "'.$username.'" and md5("'.$password.'") =admin.password';
        echo $sql;
        return $this->query($sql);
    }

    public function register($data) {
        $result = $this->getAdminByUsername($data['username']);
        if (count($result) == 0) {
            $this->db->insert('admin', $data);
            $result = $this->getAdminByUsername($data['username']);
            return $result[0];
        }
        return 0;
    }

    public function getAllDataAdmin() {
        $sql = "select admin.nama,  admin.alamat, admin.telp, admin.email, admin.username
                from admin";
        return $this->query($sql);
    }

}
