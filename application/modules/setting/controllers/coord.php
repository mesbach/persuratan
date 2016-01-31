<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//agenda
class Coord extends Koordinator_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('setting/model_setting');
    }

    public function index() {
        $this->title = "Setting Aplikasi";
        $this->script_header = 'lay-scripts/header_mail_kks';
        $this->script_footer = 'lay-scripts/footer_mail_kks';
        $data['akun'] = $this->model_setting->getadmin();
        $data['akses'] = $this->model_setting->getAkses();
        $this->display('setting',$data);
    }
    
    public function adduser() {
        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'telp' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('pwd'),
            'aktif' => 1,
            'kode' => $this->input->post('kode')
        );
        $this->model_setting->adduser($data);
        redirect('setting/coord/');
    }
    
    public function changeactive() {
        header('Cache-Control: no-cache, must-revalidate');
        header('Access-Control-Allow-Origin: *');
        header('Content-type: application/json');
        $data = $this->input->post('value');

        $idadmin = $data['idadmin'];
        $temp = $data['aktif'];
        if($temp==0)
        {
            $aktif = 1;
        }
        else if($temp==1)
        {
            $aktif = 0;
        }
        $data2 = array(
            'aktif' => $aktif
        );
        $this->model_setting->updateProfile($idadmin,$data2);
        echo true;
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
        redirect('profile/coord/');
    }
    
    public function updatelogin() {
        $id = $this->session->userdata['logged_in']['id'];
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('pwd')
        );
        $this->model_profile->updateProfile($id,$data);
        redirect('profile/coord/');
    }

}
