<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//agenda
class Fo extends Frontoffice_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('guest/model_tamu');
    }
    public function index() {
        $this->title="Daftar Tamu";
        $this->script_header_spesific = 'lay-scripts/header_bukutamu';
        $this->script_footer_spesific = 'lay-scripts/footer_bukutamu';
        $data['tamu'] = $this->model_tamu->getTamu();
        $this->display('listtamu',$data);
    }
    
    public function detailtamu() {
        $this->title="Detail Tamu";
        $this->script_header_spesific = 'lay-scripts/header_bukutamu';
        $this->script_footer_spesific = 'lay-scripts/footer_bukutamu';
        $this->display('detailTamu');
    }
}