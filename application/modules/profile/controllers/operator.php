<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//agenda
class Operator extends Operator_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('profile/model_profile');
    }

    public function index() {
        $this->title = "Profil Akun";
        $id = $this->session->userdata['logged_in']['id'];
        $data['datadiri'] = $this->model_profile->getadmin_byid($id);
        $this->display('myprofile', $data);
    }

    public function updateDataProfile() {
        $id = $this->session->userdata['logged_in']['id'];
        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'telp' => $this->input->post('telepon'),
            'email' => $this->input->post('email')
        );
        $this->model_profile->updateProfile($id,$data);
        redirect('profile/operator/');
    }
    
    public function updatelogin() {
        $id = $this->session->userdata['logged_in']['id'];
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('pwd')
        );
        $this->model_profile->updateProfile($id,$data);
        redirect('profile/operator/');
    }

}
