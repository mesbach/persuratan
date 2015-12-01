<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author andremaulana
 */
class login extends Login_Controller {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->driver('session');
        $this->load->helper(array('url'));
        $this->load->model('login/model_user');
    }
    
    function logout() {
        $this->session->sess_destroy();
        redirect('/');
    }

    public function index() {
        $this->title="Login Page";
        $this->display('login');
    }
    function login() {
        if (!$this->cekLogin()) {
            $menu = "hf/menu/menu_umum.php";
            $footer = "hf/footer/footer.php";
            $this->template->set_layout('fe');
            $this->template->title("Home Admin");
            $this->template->set_partial("menu", $menu);
            $this->template->set_partial("footer", $footer);
            $this->template->build("login.php");
        } else {
            redirect("pengaduan/" . $this->session->userdata['logged_in']['privilege']);
        }
    }
    function cekLogin() {
        if (isset($this->session->userdata['logged_in'])) {
            $data = $this->session->userdata['logged_in'];
            if (count($data) > 0) {
                return true;
            }
        }
        return false;
    }

    function signin() {
        if (!$this->cekLogin()) {
            $data['username'] = $this->input->post('username');
            $data['password'] = $this->input->post('password');
            $result = $this->model_user->login($data['username'], $data['password']);
            $session_arr = array();
            $url = "";
            if ($result != null) {
                if ($result[0]->issuper == 1) {
                    $url = "dashboard/coord";
                    $session_arr = array("privilege" => "coord", "id" => $result[0]->idadmin, "nama" => $result[0]->nama);
                } else if ($result[0]->issuper == 0) {
                    $url = "dashboard/operator";
                    $session_arr = array("privilege" => "operator", "id" => $result[0]->idadmin, "nama" => $result[0]->nama);
                }
                else if ($result[0]->issuper == 2) {
                    $url = "dashboard/fo";
                    $session_arr = array("privilege" => "fo", "id" => $result[0]->idadmin, "nama" => $result[0]->nama);
                }
                $this->session->set_userdata("logged_in", $session_arr);
            }
            if (count($result) == 0) {
               redirect("/");
            } else {
                redirect($url);
            }
        } else {
            redirect("dashboard/coord");
        }
    }
}
